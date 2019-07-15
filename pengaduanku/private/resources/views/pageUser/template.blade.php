<!DOCTYPE html>

<html class="loading" lang="en" data-textdirection="ltr">
  <!-- BEGIN: Head-->
  @include('pageUser.partials._head')
  <!-- END: Head-->
  <body class="horizontal-layout page-header-light horizontal-menu 2-columns  " data-open="click" data-menu="horizontal-menu" data-col="2-columns">

    <!-- BEGIN: Header-->
    @include('pageUser.partials._header')
    <!-- END: Header-->

    <!-- BEGIN: SideNav-->
    {{-- @include('pageUser.partials._navbar') --}}
    <!-- END: SideNav-->

    <!-- BEGIN: Page Main-->
    @yield('content')


 @include('pageUser.partials._footer')

    @include('pageUser.partials._script')
  </body>
</html>
