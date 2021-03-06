<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
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

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 34px;
            }
            .note {
                font-size: 34px;
                margin-top: 20px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 14px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body onload="typeWriter()">
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ url('registercustomer') }}">Hire</a>
                        <a href="{{ route('registermerchant') }}">Work</a>

                    @endauth
                </div>
            @endif

            <div class="content">
                <div id="typeWriter" class="title m-b-md">
                    
                </div>

                <div class="links"> 
                    <a href="#">Customers story</a>
                    <a href="#">Freelancers story</a>
                    <a href="#">Blog</a>
                    <a href="#">News</a>
               
                </div>
                <div class="note" >Save more time for yourself!</div>
            </div>
        </div>

<script>
    var i = 0;
    var txt = 'No matter what kind of paper you need, \
    it is simple and secure to hire a freelancer affordably.';
    var speed = 50;

    function typeWriter() {
    if (i < txt.length) {
        document.getElementById("typeWriter").innerHTML += txt.charAt(i);
        i++;
        setTimeout(typeWriter, speed);
    }
    }
</script>
    </body>
</html>
