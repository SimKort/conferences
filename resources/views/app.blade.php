<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conferences</title>
    <style>
        nav {background-color: #ffb3fe; padding: 10px;}
        ul {list-style-type: none; margin: 0; padding: 0;}
        li {display: inline; margin-right: 10px;}
        a.btn {width: 80px; position: absolute; top: 20px; right: 40px; color: purple; background-color: white; border-color: purple; display: flex; align-items: center;}
        a.btn:hover {background-color: purple; color: white;}
        table {width: 100%;}
        th, td {font-size: 14px;}
    </style>
</head>
<body>
<nav>
    <ul>
        @if(auth()->check())
            <li>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: inline; float: right; margin-top: 8px; margin-right: 30px;">
                    @csrf
                    <button type="submit" class="btn" style="width: 94px; background-color: purple; color: white; border-color: #610243; display: flex; align-items: center;">Logout</button>
                </form>
            </li>
        @else
            <li>
                <a href="{{ route('login') }}" class="btn">Login</a>
            </li>
        @endif
    </ul>
</nav>
<div class="container">
    @yield('content')
</div>
<script type="text/javascript" src="{{ mix('js/app.js') }}"></script>
<link rel="stylesheet" href="{{ mix('css/app.css') }}">
</body>
</html>
