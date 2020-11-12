<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    @include('backend.layouts.head')
</head>
<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <!-- <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div> -->

    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-theme="light" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
            <!-- header -->
        @include('backend.layouts.header')
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->

        @include('backend.layouts.notification')

        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        @include('backend.layouts.sidebar')
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            @yield('content')
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            @include('backend.layouts.footer')
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <script type="text/javascript">
        $(document).ready(function() {
            $('#summernote').summernote({
                height: 200,
                dialogsInBody: true,

            });
        });
    </script>
    <script src="{{ asset('assets/backend/libs/popper.js/dist/umd/popper.min.js') }}"></script>
    <script src="{{ asset('assets/backend/libs/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/backend/libs/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/backend/libs/summer-note/summernote.min.js')}}"></script>
    <!-- apps -->
    <!-- apps -->


    <script src="{{ asset('assets/backend/js/app-style-switcher.js')}}"></script>
    <script src="{{ asset('assets/backend/js/feather.min.js')}}"></script>
    <script src="{{ asset('assets/backend/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js ')}}"></script>
    <script src="{{ asset('assets/backend/js/sidebarmenu.js')}}"></script>
    <!--Custom JavaScript -->
    <script src="{{ asset('assets/backend/js/custom.min.js ')}}"></script>
    <!--This page JavaScript -->
    <!-- <script src="{{ asset('assets/backend/extra-libs/c3/d3.min.js')}}"></script>
    <script src="{{ asset('assets/backend/extra-libs/c3/c3.min.js ')}}"></script> -->
    <!-- <script src="{{ asset('assets/backend/libs/chartist/dist/chartist.min.js ')}}"></script> -->
    <!-- <script src=" asset('assets/backend/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js'"></script> -->
    <script src="{{ asset('assets/backend/extra-libs/jvector/jquery-jvectormap-2.0.2.min.js')}}"></script>
    <script src="{{ asset('assets/backend/extra-libs/jvector/jquery-jvectormap-world-mill-en.js')}}"></script>
    <!-- <script src="asset('assets/backend/js/pages/dashboards/dashboard1.min.js'"></script> -->
{{--    <script src="{{ asset('assets/backend/libs/notify2.0/js/notify.js')}}"></script>--}}
</body>
