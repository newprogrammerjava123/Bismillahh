<!-- Topbar -->
<header class="topbar my-color">
    <div class="topbar-left">
        <span class="topbar-btn sidebar-toggler"><i>&#9776;</i></span>
        <h4 href="#" class="text">E-Arsip Desa</h4>
    </div>

    <div class="topbar-right">
        {{-- <a class="topbar-btn" href="#qv-global" data-toggle="quickview"><i class="ti-align-right"></i></a> --}}

        <div class="topbar-divider"></div>

        <ul class="topbar-btns">
            <li class="dropdown">
                <span class="topbar-btn" data-toggle="dropdown"><img class="avatar"
                        src="{{ asset('vendor/bootstrap-theadmin-master/assets') }}/img//avatar/1.jpg"
                        alt="..."></span>
                <div class="dropdown-menu dropdown-menu-right">
                    {{-- <a class="dropdown-item" href="../page/profile.html"><i class="ti-user"></i> Profile</a>
                    <a class="dropdown-item" href="../page-app/mailbox.html">
                        <div class="flexbox">
                            <i class="ti-email"></i>
                            <span class="flex-grow">Inbox</span>
                            <span class="badge badge-pill badge-info">5</span>
                        </div>
                    </a>
                    <a class="dropdown-item" href="#"><i class="ti-settings"></i> Settings</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="../page-extra/user-lock-1.html"><i class="ti-lock"></i> Lock</a> --}}
                    <a class="dropdown-item" href="{{ url('/logout') }}"><i class="fa fa-sign-out"></i>Logout</a>
                </div>
            </li>

            <!-- Notifications -->
            {{-- <li class="dropdown d-none d-md-block">
                <span class="topbar-btn has-new" data-toggle="dropdown"><i class="ti-bell"></i></span>
                <div class="dropdown-menu dropdown-menu-right">

                    <div class="media-list media-list-hover media-list-divided media-list-xs">
                        <a class="media media-new" href="#">
                            <span class="avatar bg-success"><i class="ti-user"></i></span>
                            <div class="media-body">
                                <p>New user registered</p>
                                <time datetime="2017-07-14 20:00">Just now</time>
                            </div>
                        </a>

                        <a class="media" href="#">
                            <span class="avatar bg-info"><i class="ti-shopping-cart"></i></span>
                            <div class="media-body">
                                <p>New order received</p>
                                <time datetime="2017-07-14 20:00">2 min ago</time>
                            </div>
                        </a>

                        <a class="media" href="#">
                            <span class="avatar bg-warning"><i class="ti-face-sad"></i></span>
                            <div class="media-body">
                                <p>Refund request from <b>Ashlyn Culotta</b></p>
                                <time datetime="2017-07-14 20:00">24 min ago</time>
                            </div>
                        </a>

                        <a class="media" href="#">
                            <span class="avatar bg-primary"><i class="ti-money"></i></span>
                            <div class="media-body">
                                <p>New payment has made through PayPal</p>
                                <time datetime="2017-07-14 20:00">53 min ago</time>
                            </div>
                        </a>
                    </div>

                    <div class="dropdown-footer">
                        <div class="left">
                            <a href="#">Read all notifications</a>
                        </div>

                        <div class="right">
                            <a href="#" data-provide="tooltip" title="Mark all as read"><i
                                    class="fa fa-circle-o"></i></a>
                            <a href="#" data-provide="tooltip" title="Update"><i class="fa fa-repeat"></i></a>
                            <a href="#" data-provide="tooltip" title="Settings"><i class="fa fa-gear"></i></a>
                        </div>
                    </div>

                </div>
            </li> --}}
            <!-- END Notifications -->

            <!-- Messages -->
            {{-- <li class="dropdown d-none d-md-block">
        <span class="topbar-btn" data-toggle="dropdown"><i class="ti-email"></i></span>
        <div class="dropdown-menu dropdown-menu-right">

          <div class="media-list media-list-divided media-list-hover media-list-xs scrollable" style="height: 290px">
            <a class="media media-new" href="../page-app/mailbox-single.html">
              <span class="avatar status-success">
                <img src="../assets/img/avatar/1.jpg" alt="...">
              </span>

              <div class="media-body">
                <p><strong>Maryam Amiri</strong> <time class="float-right" datetime="2017-07-14 20:00">23 min ago</time></p>
                <p class="text-truncate">Authoritatively exploit resource maximizing technologies before technically.</p>
              </div>
            </a>

            <a class="media media-new" href="../page-app/mailbox-single.html">
              <span class="avatar status-warning">
                <img src="../assets/img/avatar/2.jpg" alt="...">
              </span>

              <div class="media-body">
                <p><strong>Hossein Shams</strong> <time class="float-right" datetime="2017-07-14 20:00">48 min ago</time></p>
                <p class="text-truncate">Continually plagiarize efficient interfaces after bricks-and-clicks niches.</p>
              </div>
            </a>

            <a class="media" href="../page-app/mailbox-single.html">
              <span class="avatar status-dark">
                <img src="../assets/img/avatar/3.jpg" alt="...">
              </span>

              <div class="media-body">
                <p><strong>Helen Bennett</strong> <time class="float-right" datetime="2017-07-14 20:00">3 hours ago</time></p>
                <p class="text-truncate">Objectively underwhelm cross-unit web-readiness before sticky outsourcing.</p>
              </div>
            </a>

            <a class="media" href="../page-app/mailbox-single.html">
              <span class="avatar status-success bg-purple">FT</span>

              <div class="media-body">
                <p><strong>Fidel Tonn</strong> <time class="float-right" datetime="2017-07-14 20:00">21 hours ago</time></p>
                <p class="text-truncate">Interactively innovate transparent relationships with holistic infrastructures.</p>
              </div>
            </a>

            <a class="media" href="../page-app/mailbox-single.html">
              <span class="avatar status-danger">
                <img src="../assets/img/avatar/4.jpg" alt="...">
              </span>

              <div class="media-body">
                <p><strong>Freddie Arends</strong> <time class="float-right" datetime="2017-07-14 20:00">Yesterday</time></p>
                <p class="text-truncate">Collaboratively visualize corporate initiatives for web-enabled value.</p>
              </div>
            </a>

            <a class="media" href="../page-app/mailbox-single.html">
              <span class="avatar status-success">
                <img src="../assets/img/avatar/5.jpg" alt="...">
              </span>

              <div class="media-body">
                <p><strong>Freddie Arends</strong> <time class="float-right" datetime="2017-07-14 20:00">Yesterday</time></p>
                <p class="text-truncate">Interactively reinvent standards compliant supply chains through next-generation bandwidth.</p>
              </div>
            </a>
          </div>

          <div class="dropdown-footer">
            <div class="left">
              <a href="#">Read all messages</a>
            </div>

            <div class="right">
              <a href="#" data-provide="tooltip" title="Mark all as read"><i class="fa fa-circle-o"></i></a>
              <a href="#" data-provide="tooltip" title="Settings"><i class="fa fa-gear"></i></a>
            </div>
          </div>

        </div>
      </li> --}}
            <!-- END Messages -->

        </ul>

    </div>
</header>
<!-- END Topbar -->
