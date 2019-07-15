<aside class="sidenav-main nav-expanded nav-lock nav-collapsible sidenav-dark sidenav-active-rounded">
    <div class="brand-sidebar">
        <h1 class="logo-wrapper"><a class="brand-logo darken-1" href="index.html"><img src="{{asset('public/template/images/logo/materialize-logo.png')}}" alt="materialize logo"><span class="logo-text hide-on-med-and-down">Materialize</span></a>
            <a class="navbar-toggler" href="#"><i class="material-icons">radio_button_checked</i></a></h1>
    </div>
    <ul class="sidenav sidenav-collapsible leftside-navigation collapsible sidenav-fixed menu-shadow" id="slide-out" data-menu="menu-navigation" data-collapsible="accordion">
        <li class="navigation-header"><a class="navigation-header-text">Menu</a><i class="navigation-header-icon material-icons">more_horiz</i>
        </li>
        <li class="bold"><a class="waves-effect waves-cyan " href="{{route('admin.home')}}"><i class="material-icons">dashboard</i><span class="menu-title" data-i18n="">Dashboard</span></a>
        </li>
        <li class="bold"><a class="waves-effect waves-cyan " href="{{route('admin.instansi')}}"><i class="material-icons">account_balance</i><span class="menu-title" data-i18n="">Laporan Masuk</span></a>
        </li>
        <li class="bold"><a class="waves-effect waves-cyan " href="{{route('admin.kategori')}}"><i class="material-icons">collections_bookmark</i><span class="menu-title" data-i18n="">Kategori Laporan</span></a>
        </li>
        <li class="bold"><a class="waves-effect waves-cyan " href="{{route('admin.user')}}"><i class="material-icons">filter_none</i><span class="menu-title" data-i18n="">Manajemen User</span></a>
        </li>
        <li class="bold"><a class="waves-effect waves-cyan " href="{{route('admin.aduan')}}"><i class="material-icons">filter_none</i><span class="menu-title" data-i18n="">Logi Aktivitas</span></a>
        </li>
    </ul>
    <div class="navigation-background"></div><a class="sidenav-trigger btn-sidenav-toggle btn-floating btn-medium waves-effect waves-light hide-on-large-only" href="#" data-target="slide-out"><i class="material-icons">menu</i></a>
</aside>
