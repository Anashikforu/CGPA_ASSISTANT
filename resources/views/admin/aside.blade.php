<div class="site-menubar">
    <div class="site-menubar-body">
      <div>
        <div>
          <ul class="site-menu" data-plugin="menu">
            <li class="site-menu-category">General</li>
            <li class="site-menu-item has-sub active open">
              <a href="{{ url('/') }}">
                                <i class="site-menu-icon wb-dashboard" aria-hidden="true"></i>
                                <span class="site-menu-title">Dashboard</span>
                                    {{-- <div class="site-menu-badge">
                                        <span class="badge badge-pill badge-success">3</span>
                                    </div> --}}
                            </a>
            </li>
            <li class="site-menu-item has-sub">
                <a href="{{ url('/subject') }}">
                    <i class="site-menu-icon wb-order " aria-hidden="true"></i>
                    <span class="site-menu-title">Subject</span>
                </a>
            </li>
            <li class="site-menu-item has-sub">
              <a href="{{ url('/routine') }}">
                  <i class="site-menu-icon wb-inbox " aria-hidden="true"></i>
                  <span class="site-menu-title">Class Alert</span>
              </a>
            </li>
            <li class="site-menu-item has-sub">
              <a href="{{ url('/todo') }}">
                  <i class="site-menu-icon wb-calendar " aria-hidden="true"></i>
                  <span class="site-menu-title">To Do</span>
              </a>
            </li>
            <li class="site-menu-item has-sub">
              <a href="{{ url('/monitor') }}">
                  <i class="site-menu-icon wb-calendar " aria-hidden="true"></i>
                  <span class="site-menu-title">Monitor</span>
              </a>
            </li>
          </ul>

          {{-- <div class="site-menubar-section">
            <h5>
              Milestone
              <span class="float-right">30%</span>
            </h5>
            <div class="progress progress-xs">
              <div class="progress-bar active" style="width: 30%;" role="progressbar"></div>
            </div>
            <h5>
              Release
              <span class="float-right">60%</span>
            </h5>
            <div class="progress progress-xs">
              <div class="progress-bar progress-bar-warning" style="width: 60%;" role="progressbar"></div>
            </div>
          </div> --}}
        </div>
      </div>
    </div>

    <div class="site-menubar-footer">
      <a href="javascript: void(0);" class="fold-show" data-placement="top" data-toggle="tooltip"
        data-original-title="Settings">
        <span class="icon wb-settings" aria-hidden="true"></span>
      </a>
      <a href="javascript: void(0);" data-placement="top" data-toggle="tooltip" data-original-title="Lock">
        <span class="icon wb-eye-close" aria-hidden="true"></span>
      </a>
      <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" data-placement="top" data-toggle="tooltip" data-original-title="Logout">
        <span class="icon wb-power" aria-hidden="true"></span>
      </a>
      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
      </form>
    </div>
  </div>
  <div class="site-gridmenu">
    <div>
      <div>
        <ul>
          <li>
            <a href="https://getbootstrapadmin.com/remark/base/apps/mailbox/mailbox.html">
                <i class="icon wb-envelope"></i>
                <span>Mailbox</span>
              </a>
          </li>
          <li>
            <a href="https://getbootstrapadmin.com/remark/base/apps/calendar/calendar.html">
                <i class="icon wb-calendar"></i>
                <span>Calendar</span>
              </a>
          </li>
          <li>
            <a href="https://getbootstrapadmin.com/remark/base/apps/contacts/contacts.html">
                <i class="icon wb-user"></i>
                <span>Contacts</span>
              </a>
          </li>
          <li>
            <a href="https://getbootstrapadmin.com/remark/base/apps/media/overview.html">
                <i class="icon wb-camera"></i>
                <span>Media</span>
              </a>
          </li>
          <li>
            <a href="https://getbootstrapadmin.com/remark/base/apps/documents/categories.html">
                <i class="icon wb-order"></i>
                <span>Documents</span>
              </a>
          </li>
          <li>
            <a href="https://getbootstrapadmin.com/remark/base/apps/projects/projects.html">
                <i class="icon wb-image"></i>
                <span>Project</span>
              </a>
          </li>
          <li>
            <a href="https://getbootstrapadmin.com/remark/base/apps/forum/forum.html">
                <i class="icon wb-chat-group"></i>
                <span>Forum</span>
              </a>
          </li>
          <li>
            <a href="{{ url('/') }}">
                <i class="icon wb-dashboard"></i>
                <span>Dashboard</span>
              </a>
          </li>
        </ul>
      </div>
    </div>
  </div>