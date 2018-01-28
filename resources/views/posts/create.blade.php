<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Тестирование</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

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

<nav class="navbar navbar-default navbar-static-top">
    <div class="container">
        <div class="navbar-header">

            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Branding Image -->
            <a class="navbar-brand" href="{{ url('/') }}">
                {{ config('app.name', 'Тестирование') }}
            </a>
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->
            <ul class="nav navbar-nav">
                &nbsp;
            </ul>

            <!-- Right Side Of Navbar -->
            {{--<ul class="nav navbar-nav navbar-right">--}}
                {{--<!-- Authentication Links -->--}}
                {{--@guest--}}
                    {{--<li><a href="{{ route('login') }}">Login</a></li>--}}
                    {{--<li><a href="{{ route('register') }}">Register</a></li>--}}
                    {{--@else--}}
                        {{--<li class="dropdown">--}}
                            {{--<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">--}}
                                {{--{{ Auth::user()->name }} <span class="caret"></span>--}}
                            {{--</a>--}}

                            {{--<ul class="dropdown-menu">--}}
                                {{--<li>--}}
                                    {{--<a href="{{ route('logout') }}"--}}
                                       {{--onclick="event.preventDefault();--}}
                                                     {{--document.getElementById('logout-form').submit();">--}}
                                        {{--Logout--}}
                                    {{--</a>--}}

                                    {{--<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">--}}
                                        {{--{{ csrf_field() }}--}}
                                    {{--</form>--}}
                                {{--</li>--}}
                            {{--</ul>--}}
                        {{--</li>--}}
                        {{--@endguest--}}
            {{--</ul>--}}
        </div>
    </div>
</nav>

{{--<div class="container">--}}
    {{--<div class="row">--}}


        {{--@if(Auth::check())--}}

            {{--<div class="col-lg-4">--}}

                {{--<ul class="list-group">--}}

                    {{--<li class="list-group-item">--}}

                        {{--<a href="{{ route('home') }}">Home</a>--}}


                    {{--</li>--}}

                    {{--<li class="list-group-item">--}}

                        {{--<a href="{{ route('category.create') }}">Create new category</a>--}}


                    {{--</li>--}}

                    {{--<li class="list-group-item">--}}

                        {{--<a href="{{ route('categories') }}">Categories</a>--}}


                    {{--</li>--}}

                    {{--<li class="list-group-item">--}}

                        {{--<a href="{{ route('tags') }}">Tags</a>--}}

                    {{--</li>--}}

                    {{--<li class="list-group-item">--}}

                        {{--<a href="{{ route('tag.create') }}">Create tag</a>--}}

                    {{--</li>--}}

                    {{--@if(Auth::user()->admin)--}}

                        {{--<li class="list-group-item">--}}

                            {{--<a href="{{ route('users') }}">Users</a>--}}

                        {{--</li>--}}

                        {{--<li class="list-group-item">--}}

                            {{--<a href="{{ route('user.create') }}">New User</a>--}}

                        {{--</li>--}}

                    {{--@endif--}}

                    {{--<li class="list-group-item">--}}

                        {{--<a href="{{ route('user.profile') }}">My Profile</a>--}}

                    {{--</li>--}}

                    {{--@if(Auth::user()->admin)--}}

                        {{--<li class="list-group-item">--}}

                            {{--<a href="{{ route('settings') }}">Settings</a>--}}

                        {{--</li>--}}

                    {{--@endif--}}






                    {{--<li class="list-group-item">--}}

                        {{--<a href="{{ route('post.create') }}">Create Post</a>--}}

                    {{--</li>--}}

                    {{--<li class="list-group-item">--}}

                        {{--<a href="{{ route('posts') }}">All posts</a>--}}

                    {{--</li>--}}

                    {{--<li class="list-group-item">--}}

                        {{--<a href="{{ route('posts.trashed') }}">All trashed posts</a>--}}

                    {{--</li>--}}

                {{--</ul>--}}

            {{--</div>--}}

        {{--@endif--}}
        {{--<div class="col-lg-8">--}}

            {{--@yield('content')--}}

        {{--</div>--}}

    {{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}

<!-- Scripts -->

<script src="{{asset('js/app.js')}}"></script>

<script src="{{ asset('js/toastr.min.js') }}"></script>


<script>
    @if(Session::has('success'))

    toastr.success("{{Session::get('success')}}")

    @endif

    @if(Session::has('info'))

    toastr.info("{{Session::get('info')}}")

    @endif

</script>


    <div class="panel panel-default">

        <div class="panel-heading">
            Опубликовать вопрос
        </div>

        <div class="panel-body">

            <form action="{{ route('posts.store') }}" method="post">

                {{ csrf_field() }}

                <div class="form-group">

                    <label for="title">Тема</label>

                    <input name="title" id="title" class="form-control">

                </div>

                <div class="form-group">
                    <label for="content">Вопрос</label>
                    <textarea name="content" id="content" cols="5" rows="5" class="form-control"></textarea>
                </div>

                <div class="form-group">
                    <label for="content">Ответ</label>
                    <textarea name="answer" id="content" cols="5" rows="5" class="form-control"></textarea>
                </div>

                <div class="text-center">
                    <button class="btn btn-success" type="submit">
                        Store Post
                    </button>

                </div>


            </form>

        </div>

    </div>




{{--@section('styles)--}}
{{--<!-- include summernote css/js-->--}}
{{--<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.8/summernote.css" rel="stylesheet">--}}
{{--@stop--}}

{{--@section('scripts')--}}
{{--<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.8/summernote.js"></script>--}}

{{--<script>--}}
{{--$(document).ready(function() {--}}
{{--$('#content').summernote();--}}
{{--});--}}
{{--</script>--}}

{{--@stop--}}

