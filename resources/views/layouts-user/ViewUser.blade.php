<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>Bejo Kost - Find Your Favorite Kost | Home</title>

    <!-- Favicon  -->
    <link rel="icon" href="{{asset('assets-user/img/core-img/logo-bejo.png')}}">

    <!-- Core Style CSS -->
    <link rel="stylesheet" href="{{asset('assets-user/css/core-style.css')}}">
    <link rel="stylesheet" href="{{asset('assets-user/style.css')}}">

</head>

<body>
    <!-- Search Wrapper Area Start -->
    <div class="search-wrapper section-padding-100">
        <div class="search-close">
            <i class="fa fa-close" aria-hidden="true"></i>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="search-content">
                        <form action="#" method="get">
                            <input type="search" name="search" id="search" placeholder="Type your keyword...">
                            <button type="submit"><img src="{{asset('assets-user/img/core-img/search.png')}}" alt=""></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Search Wrapper Area End -->

    <!-- ##### Main Content Wrapper Start ##### -->
    @yield('content')
    <!-- ##### Main Content Wrapper End ##### -->

    <!-- ##### Footer Area Start ##### -->
    @include('layouts-user.footer')
    <!-- ##### Footer Area End ##### -->
    @include('sweetalert::alert')

    <!-- ##### jQuery (Necessary for All JavaScript Plugins) ##### -->
    <script src="{{asset('assets-user/js/jquery/jquery-2.2.4.min.js')}}"></script>
    <!-- Popper js -->
    <script src="{{asset('assets-user/js/popper.min.js')}}"></script>
    <!-- Bootstrap js -->
    <script src="{{asset('assets-user/js/bootstrap.min.js')}}"></script>
    <!-- Plugins js -->
    <script src="{{asset('assets-user/js/plugins.js')}}"></script>
    <!-- Active js -->
    <script src="{{asset('assets-user/js/active.js')}}"></script>

</body>

</html>
