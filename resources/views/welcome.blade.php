<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Account Manager</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #f0f0f0;
                color: #3f5498;
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
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            .form {
                display: flex;
                flex-direction: column;
                margin: 2vh 2vw;
            }

            .inputs {
                padding: 2vh 2vw;
                margin: .5vh .5vw;
            }

            .activate-text {
                margin-left: -34vw;
            }

            .button {
                height: 30px;
                width: 80px;
                border-radius: 10px;
                background: #3e92c3;
                color: white;
            }

            .accounts {
                display: flex;
                flex-direction: row;
            }

            .accounts-list {
                list-style-type: none;
                justify-content: flex-start;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
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
                    Account Manager
                </div>
                <form class="form" action="">
                    <input class="inputs" type="text" placeholder="First Name">
                    <input class="inputs" type="text" placeholder="Last Name">
                    <input class="inputs" type="email" placeholder="Email">
                    <input class="inputs" type="number" placeholder="Account Type ID">
                    <input class="inputs" type="checkbox"><p class="activate-text">Click to Activate!</p>
                    <button class="button">Submit</button>
                </form>
                <div class="accounts">
                    <h3>Account Types:</h3>
                    <ul class="accounts-list">
                        @foreach ($accounts as $account)
                            <li>{{$account}}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </body>
</html>