<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

    <title>Тест</title>

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
    </style>
</head>
<body>
<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('/home') }}">Главная</a>
                @else
                    <a href="{{ route('login') }}">Войти</a>
                    <a href="{{ route('register') }}">Регистрация</a>
                    @endauth
        </div>
    @endif

            <form action="{{ route('posts.check', ['id' => $post->id]) }}"  method="post" enctype="multipart/form-data">
                {{ csrf_field() }}

                <div class="container">
                    <div class="row">
                        <div class="col-md-2 text-center">
                            @if($prev)
                                <a href="{{ route('posts.index', ['id' => $prev->id]) }}" class="btn btn-sm btn-info">
                                    Предыдущий вопрос
                                </a>
                            @endif
                        </div>
                        <div class="col-md-8 text-center">
                            <h1>{{$post -> title}}</h1>
                            <h2>{{ $post->content }}</p>

                            <input type="text" class="form-control mx-sm-3" name="otvet" placeholder="Введите ответ"></br>

                            <button type="submit " class="btn btn-primary">Ответить</button>
                        </div>

                        <div class="col-md-2 text-center">
                            @if($next)
                                <a href="{{ route('posts.index', ['id' => $next->id]) }}" class="btn btn-sm btn-info">
                                    Следующий вопрос
                                </a>
                            @endif
                        </div>

                    </div>
                </div>
            </form>
</div>

</body>
</html>
