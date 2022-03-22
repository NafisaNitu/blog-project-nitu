<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from themesbrand.com/skote/layouts/vertical/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 08 Sep 2020 15:06:42 GMT -->
<head>

    <meta charset="utf-8" />
    <title>Biztrox @yield('title')</title>
    @include('admin.includes.assets.css')

</head>

<body data-sidebar="dark">

<!-- Begin page -->
<div id="layout-wrapper">

    @if(Auth::check())

       @include('admin.includes.header')

       @include('admin.includes.menu')
    @endif

    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->

    <div class="{{ Auth::check() ? 'main-content' : '' }}">

        <div class="{{ Auth::check() ? 'page-content' : '' }}">

            @yield('body')
            <!-- container-fluid -->
        </div>
        <!-- End Page-content -->

        <!-- Modal -->
    @include('admin.includes.modal')
        <!-- end modal -->

       @include('admin.includes.footer')
    </div>
    <!-- end main content-->

</div>
<!-- END layout-wrapper -->

<!-- Right Sidebar -->
@include('admin.includes.sidebar')
<!-- /Right-bar -->

<!-- Right bar overlay-->
<div class="rightbar-overlay"></div>

<!-- JAVASCRIPT -->
@include('admin.includes.assets.script')
</body>


</html>
