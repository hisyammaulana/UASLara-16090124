<!DOCTYPE html>

<html class="loading" lang="en" data-textdirection="ltr">
  <!-- BEGIN: Head-->
  @include('pageAdmin.partials._head')
  <!-- END: Head-->
  <body class="vertical-layout page-header-light vertical-menu-collapsible vertical-dark-menu 2-columns  " data-open="click" data-menu="vertical-dark-menu" data-col="2-columns">

    <!-- BEGIN: Header-->
   @include('pageAdmin.partials._header')
    <!-- END: Header-->



    <!-- BEGIN: SideNav-->
    @include('pageAdmin.partials._sidebar')
    <!-- END: SideNav-->

    <!-- BEGIN: Page Main-->
    @yield('content')
    <!-- END: Page Main-->

    <!-- BEGIN: Footer-->

    @include('pageAdmin.partials._footer')

    <!-- END: Footer-->

    @include('pageAdmin.partials._script')

  </body>
</html>
