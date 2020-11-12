
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
@include('backend.layouts.notification')
    <!-- ============================================================== -->
    <!-- Page wrapper  -->
    <!-- ============================================================== -->
    <div class="page-wrapper">
        <div class="auth-wrapper d-flex no-block justify-content-center align-items-center position-relative"
             style="background:url({{url('assets/backend/images/big/auth-bg.jpg')}}) no-repeat center center;">
            <div class="auth-box row">
                <div class="col-lg-7 col-md-5 modal-bg-img" style="background-image: url({{url('assets/backend/images/big/3.jpg')}});">
                </div>
                <div class="col-lg-5 col-md-7 bg-white">
                    <div class="p-3">
                        <div class="text-center">
                            <img src=" {{url('assets/backend/images/big/icon.png')}}" alt="wrapkit">
                        </div>
                        <h2 class="mt-3 text-center">Sign In</h2>
                        <p class="text-center">Enter your email address and password to access admin panel.</p>
                        <form method="POST" action="{{ route('admin.login') }}" aria-label="{{ __('Login') }}">
                            @csrf
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="text-dark" for="uname">Email Or Username</label>
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="text-dark" for="pwd">Password</label>
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-12 text-center">
                                    <button type="submit" class="btn btn-block btn-dark">Sign In</button>
                                </div>
                                <div class="col-lg-12 text-center mt-5">
                                    You Can Register as User  <a href="{{ route('register') }}" class="text-danger">Sign Up</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('backend.layouts.footer')


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


