<header class="page-topbar" id="header">
    <div class="navbar navbar-fixed">
      <nav class="navbar-main navbar-color nav-collapsible sideNav-lock navbar-light">
        <div class="nav-wrapper">
          <ul class="navbar-list right">
            <li class="hide-on-med-and-down"><a class="waves-effect waves-block waves-light toggle-fullscreen" href="javascript:void(0);"><i class="material-icons">settings_overscan</i></a></li>
            <li class="hide-on-large-only"><a class="waves-effect waves-block waves-light search-button" href="javascript:void(0);"><i class="material-icons">search</i></a></li>

            <li><a class="waves-effect waves-block waves-light profile-button" href="javascript:void(0);" data-target="profile-dropdown"><span class="avatar-status avatar-online"><img src="{{asset('public/template/images/avatar/avatar-7.png')}}" alt="avatar"><i></i></span></a></li>

          </ul>
          <!-- translation-button-->
          <ul class="dropdown-content" id="translation-dropdown">

          </ul>
          <!-- notifications-dropdown-->
          <ul class="dropdown-content" id="notifications-dropdown">


          </ul>
          <!-- profile-dropdown-->
          <ul class="dropdown-content" id="profile-dropdown">
            <li><a class="grey-text text-darken-1" href="user-profile-page.html"><i class="material-icons">person_outline</i> Profile</a></li>
            <li><a class="grey-text text-darken-1" href="{{ route('logout') }}"  onclick="event.preventDefault();
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
    </div>
  </header>
