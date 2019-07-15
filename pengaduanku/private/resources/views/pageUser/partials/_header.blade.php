<header class="page-topbar" id="header">
    <div class="navbar navbar-fixed">
      <nav class="navbar-main navbar-color nav-collapsible sideNav-lock navbar-dark gradient-45deg-light-blue-cyan">
        <div class="nav-wrapper">
          <ul class="left">
            <li>
              <h1 class="logo-wrapper"><a class="brand-logo darken-1" href="#"><span class="logo-text hide-on-med-and-down">Pengaduan Jalan Rusak</span></a></h1>
            </li>
          </ul>
          <ul class="navbar-list right">
            {{-- <li class="hide-on-med-and-down"><a class="waves-effect waves-block waves-light translation-button" href="javascript:void(0);" data-target="translation-dropdown"><span class="flag-icon flag-icon-gb"></span></a></li> --}}
            <li class="hide-on-med-and-down"><a class="waves-effect waves-block waves-light toggle-fullscreen" href="javascript:void(0);"><i class="material-icons">settings_overscan</i></a></li>
            <li class="hide-on-large-only"><a class="waves-effect waves-block waves-light search-button" href="javascript:void(0);"><i class="material-icons">search         </i></a></li>
            {{-- <li><a class="waves-effect waves-block waves-light notification-button" href="javascript:void(0);" data-target="notifications-dropdown"><i class="material-icons">notifications_none<small class="notification-badge orange accent-3">5</small></i></a></li> --}}
            <li><a class="waves-effect waves-block waves-light profile-button" href="javascript:void(0);" data-target="profile-dropdown"><span class="avatar-status avatar-online"><img src="{{asset('public/template/images/avatar/avatar-7.png')}}" alt="avatar"><i></i></span></a></li>
            {{-- <li><a class="waves-effect waves-block waves-light sidenav-trigger" href="#" data-target="slide-out-right"><i class="material-icons">format_indent_increase</i></a></li> --}}
          </ul>
          <!-- translation-button-->
          <ul class="dropdown-content" id="translation-dropdown">
            <li><a class="grey-text text-darken-1" href="#!"><i class="flag-icon flag-icon-gb"></i> English</a></li>
            <li><a class="grey-text text-darken-1" href="#!"><i class="flag-icon flag-icon-fr"></i> French</a></li>
            <li><a class="grey-text text-darken-1" href="#!"><i class="flag-icon flag-icon-cn"></i> Chinese</a></li>
            <li><a class="grey-text text-darken-1" href="#!"><i class="flag-icon flag-icon-de"></i> German</a></li>
          </ul>
          <!-- notifications-dropdown-->
          <ul class="dropdown-content" id="notifications-dropdown">
            <li>
              <h6>NOTIFICATIONS<span class="new badge">5</span></h6>
            </li>
            <li class="divider"></li>
            <li><a class="grey-text text-darken-2" href="#!"><span class="material-icons icon-bg-circle cyan small">add_shopping_cart</span> A new order has been placed!</a>
              <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">2 hours ago</time>
            </li>
            <li><a class="grey-text text-darken-2" href="#!"><span class="material-icons icon-bg-circle red small">stars</span> Completed the task</a>
              <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">3 days ago</time>
            </li>
            <li><a class="grey-text text-darken-2" href="#!"><span class="material-icons icon-bg-circle teal small">settings</span> Settings updated</a>
              <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">4 days ago</time>
            </li>
            <li><a class="grey-text text-darken-2" href="#!"><span class="material-icons icon-bg-circle deep-orange small">today</span> Director meeting started</a>
              <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">6 days ago</time>
            </li>
            <li><a class="grey-text text-darken-2" href="#!"><span class="material-icons icon-bg-circle amber small">trending_up</span> Generate monthly report</a>
              <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">1 week ago</time>
            </li>
          </ul>
          <!-- profile-dropdown-->
          <ul class="dropdown-content" id="profile-dropdown">
            <li><a class="grey-text text-darken-1" href="app-chat.html"><i class="material-icons">chat_bubble_outline</i> <br/></a></li>
            <li><a class="grey-text text-darken-1" href="{{route('profile', Auth::user()->id)}}"><i class="material-icons">person_outline</i> Profile</a></li>
            <li><a class="grey-text text-darken-1" href="{{route('logout')}}" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();"><i class="material-icons">keyboard_tab</i> Logout</a></li>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
          </ul>
        </div>
        <nav class="display-none search-sm">
          <div class="nav-wrapper">
            <form>
              <div class="input-field">
                <input class="search-box-sm" type="search" required="">
                <label class="label-icon" for="search"><i class="material-icons search-sm-icon">search</i></label><i class="material-icons search-sm-close">close</i>
              </div>
            </form>
          </div>
        </nav>
      </nav>
      <!-- BEGIN: Horizontal nav start-->
      <nav class="white hide-on-med-and-down" id="horizontal-nav">
        <div class="nav-wrapper">
          <ul class="left hide-on-med-and-down" id="ul-horizontal-nav" data-menu="menu-navigation">
            <li><a class="dropdown-menu" href="{{route('home')}}" ><i class="material-icons">home</i><span>Beranda<i class="material-icons right"></i></span></a></li>
            <li><a class="dropdown-menu" href="{{route('isiaduan')}}" ><i class="material-icons">edit</i><span>Isi Aduan<i class="material-icons right"></i></span></a></li>
            <li><a class="dropdown-menu" href="{{route('riwayat.aduan')}}" data-target="DashboardDropdown"><i class="material-icons">timer</i><span>Riwayat Aduan<i class="material-icons right"></i></span></a>
            <ul class="dropdown-content dropdown-horizontal-list" id="DashboardDropdown"></ul>
            </li>
            <li><a class="dropdown-menu" href="{{route('blog')}}" data-target="DashboardDropdown"><i class="material-icons">format_list_bulleted</i><span> Tanggapan<i class="material-icons right"></i></span></a>
            <ul class="dropdown-content dropdown-horizontal-list" id="DashboardDropdown"></ul>
            </li>
            <li><a class="dropdown-menu" href="{{route('help')}}" data-target="DashboardDropdown"><i class="material-icons">help</i><span>Bantuan<i class="material-icons right"></i></span></a>
                <ul class="dropdown-content dropdown-horizontal-list" id="DashboardDropdown"></ul>
                </li>
          </ul>
        </div>
        <!-- END: Horizontal nav start-->
      </nav>
    </div>
  </header>
