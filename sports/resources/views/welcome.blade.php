<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <title>46000% Foot</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Monoton" rel="stylesheet">
        <!-- Styles -->
        <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
        <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
        <style>
            html, body {
                background-color: #fff;
                background-image: url({{url('img/welcome.jpg')}});
                background-size: cover;
                background-position: top center !important;
                background-repeat: no-repeat !important;
                background-attachment: fixed;
                color: #636b6f;
                /*font-family: 'Raleway', sans-serif;*/
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-left {
              position: absolute;
              left: 10px;
              top: 18px;
            }
            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
                color: #fff;
                font-family: 'Monoton', cursive;
                -webkit-animation: neon1 2.5s ease-in-out infinite alternate;
                -moz-animation: neon1 2.5s ease-in-out infinite alternate;
                animation: neon1 2.5s ease-in-out infinite alternate;
            }

            .title:hover {
              color: #75AADB;
              text-shadow: 2px 2px 2px rgba(0, 0, 0, 0.8);
              -webkit-animation: none;
              -moz-animation: none;
              animation: none;
            }

            @-webkit-keyframes neon1 {
              from {
                text-shadow: 0 0 10px #fff, 0 0 20px #fff, 0 0 30px #fff, 0 0 40px #75AADB, 0 0 70px #75AADB, 0 0 80px #75AADB, 0 0 100px #75AADB, 0 0 150px #75AADB;
              }
              to {
                text-shadow: 0 0 5px #fff, 0 0 10px #fff, 0 0 15px #fff, 0 0 20px #75AADB, 0 0 35px #75AADB, 0 0 40px #75AADB, 0 0 50px #75AADB, 0 0 75px #75AADB;
              }
            }

            .links > a {
                color: #fff;
                padding: 0 25px;
                font-size: 16px;
                font-weight: bold;
                letter-spacing: .1rem;
                text-shadow: 2px 2px 2px rgba(117, 170, 219, 0.8);
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
      <div class="container">
        <div class="flex-center position-ref full-height">
                <div class="top-left links">
                  <a href="{{ url('/admin') }}">Admin Panel</a>
                </div>
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    46000% Foot
                </div>
            </div>
        </div>

      </div>


    </body>
</html>
