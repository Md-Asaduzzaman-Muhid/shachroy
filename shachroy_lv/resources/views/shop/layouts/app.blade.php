<!DOCTYPE html>
<html dir="ltr" lang="en">
    <head>
        @include('shop.layouts.head')
    </head>
    <body>

        @include('shop.layouts.header')

        @include('shop.layouts.notification')

        @yield('content')

        @include('shop.layouts.footer')



        <script src="{{ asset('assets/libs/jquery-3.5.1/jquery.min.js') }}"></script>
        <script src="{{ asset('assets/libs/bootstrap/dist/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('assets/libs/summer-note/summernote.min.js')}}"></script>
    </body>
</html>
