<?php
  
namespace App\Http\Controllers;
   
use App\Models\Product;
use App\Models\exam;
use App\Models\Routine;
use Illuminate\Http\Request;
use Auth;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $semester  = Product::where('user_id',Auth::user()->id)->distinct()->get(['semester_id'])->pluck('semester_id');
        $selected_semester  = json_decode($semester,true)  ;
        $products = Product::where('user_id',Auth::user()->id)->whereIn('semester_id', $selected_semester)->orderBy('credit')->get();
        $cgpa = 0;
        $credit = Product::where('user_id',Auth::user()->id)->where('inactive',0)->sum('credit');
        foreach ($products as $key => $value) {
            if($value->inactive == 0){
                $cgpa += $value->credit*$value->expected;
            }
        }
        if($credit > 0){
            $cgpa /= $credit;
        }
        $cgpa = round($cgpa,3);
        return view('posts.index',compact('products','cgpa','semester','selected_semester'))
            ->with('i', (request()->input('page', 1) - 1) * 20);
    }

    public function semester(Request $request)
    {
        $semester  = Product::where('user_id',Auth::user()->id)->distinct()->get(['semester_id'])->pluck('semester_id');
        $selected_semester  = json_decode($request->semester,true)  ;
        $products = Product::where('user_id',Auth::user()->id)->whereIn('semester_id', $selected_semester)->orderBy('credit')->get();
        $cgpa = 0;
        $credit = Product::where('user_id',Auth::user()->id)->where('inactive',0)->whereIn('semester_id', $selected_semester)->sum('credit');
        foreach ($products as $key => $value) {
            if($value->inactive == 0){
                $cgpa += $value->credit*$value->expected;
            }
        }
        if($credit > 0){
        $cgpa /= $credit;
        $cgpa = round($cgpa,3);
        }
        $data = ['products'=> $products,'cgpa' => $cgpa ,'selected_semester' => $selected_semester];
        return $data;
    }
     
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'subject_name' => 'required',
            'credit' => 'required',
        ]);
    
        Product::create($request->all());
     
        return Response(['status' => true]);
    }
     
    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('posts.show',compact('product'));
    } 
     
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit( $subject)
    {
        $product =  Product::find($subject);
        $exams =  exam::where('f_subject_id',$subject)->get();
        $routines =  Routine::where('f_subject_id',$subject)->orderBy('weekday')->get();
        return view('posts.edit',compact('product','exams','routines'));
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $subject)
    {
        $request->validate([
            'subject_name' => 'required',
            'credit' => 'required',
        ]);
        
        $product =  Product::find($subject);
        $product->update($request->all());
    
        return redirect()->route('subject.index')
                        ->with('success','Product updated successfully');
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy( $subject)
    {
        $product =  Product::find($subject);
        $product->delete();
    
        return redirect()->route('subject.index')
                        ->with('success','Product deleted successfully');
    }
}