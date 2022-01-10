<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exams', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('f_subject_id')->unsigned();
            $table->string('exam_name')->nullable();
            $table->integer('weight')->nullable();
            $table->integer('mark')->nullable();
            $table->enum('feedback', ['Better','Good','Average','Below Avg','Disaster'])->default('Disaster');
            $table->date('exam_date')->nullable();
            $table->time('exam_time')->nullable();
            $table->boolean('status')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('exams');
    }
}
