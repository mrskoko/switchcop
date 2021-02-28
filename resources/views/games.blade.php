<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>SwitchCop</title>


        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
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
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            a:link {
                text-decoration:none;
            }

            /* visited link */
            a:visited {
                text-decoration:none;
            }

            /* mouse over link */
            a:hover {
                text-decoration:none;
            }

            /* selected link */
            a:active {
                text-decoration:none;
            }
            a{
                font-size: 18px;
                color:8c8c8c;
            }
        </style>
    </head>
    <body>
        <div class="flex-center">
            <h2>Games</h2>
        </div>
        <div class="flex-center position-ref ">
            <ul>
                @foreach($allGames as $game)
                    <li>
                       <a href="{{ url('games/'.$game->id) }}">{{$game->name}}</a>
                    </li>
                @endforeach
            </ul>
        </div>
         <h4 class="flex-center">
               <a style='margin-right:60px;' href="{{ url('/')}}">Back</a>
               <a href="{{url('gamesAdd')}}">Add</a> 
            </h4>
    </body>
</html>
