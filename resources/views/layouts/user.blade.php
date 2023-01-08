<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0 , shrink-to-fit=no" />
    <title>EG APP</title>
    <link rel="icon" href="{{URL::asset('user/assets/images/eg-app.png')}}">
    <!-- <link href="https://fonts.googleapis.com/css?family=Cairo&amp;display=swap" rel="stylesheet"> -->
    <link rel="stylesheet" href="{{URL::asset('user/assets/fontawesome-free-6.1.1-web/css/all.css')}}"> <!--library font-awesome-5-->
    <link rel="stylesheet" href="{{URL::asset('user/assets/css/animate.css')}}">
    <link rel="stylesheet" href="{{URL::asset('user/assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('user/assets/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('user/assets/css/bootstrap.css')}}" />
    <link rel="stylesheet" href="{{URL::asset('user/assets/css/style.css')}}" />
</head>
<body>

    <!-- Begin Section Navbar -->
    @include('user.includes.header')
    <!-- End Section Navbar -->

    @yield('content')

    @include('user.includes.footer')

   
    <script src="{{URL::asset('user/assets/js/jquery-3.2.1.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="{{URL::asset('user/assets/js/bootstrap.min.js')}}"></script>
    <script src="{{URL::asset('user/assets/js/wow.min.js')}}"></script>
    <script src="{{URL::asset('user/assets/js/isotope.pkgd.min.js')}}"></script>
    <script src="{{URL::asset('user/assets/js/jquery.waypoints.min.js')}}"></script>
    <script src="{{URL::asset('user/assets/js/jquery.counterup.min.js')}}"></script>
    <script src="{{URL::asset('user/assets/js/owl.carousel.min.js')}}"></script>
    <script src="{{URL::asset('user/assets/js/custom.js')}}"></script>
    <script>
        $('#myCarousel').carousel({
            interval : 2000
        });
        new WOW().init();
        
    </script>

    <script>
        // Refresh Page When Change Button With Langauge 
        var url = "{{ route('changeLang') }}";
        $(".changeLang").change(function(){
            window.location.href = url + "?lang="+ $(this).val();
        });
    </script>

</body>
</html>