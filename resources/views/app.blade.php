<html lang="en">
<head>
    <!--https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Bungee|Comfortaa|Oswald:300" rel="stylesheet"> 
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/header.css')}}">
    <title>{{config('app.name')}}</title>
</head>
<body>
    <div id="background"></div>
    @if(isset($show_menu))
    @if($show_menu)
    <div id="header">
        <h1>Cubebuster</h1>
        <h2>Вземи, гледай, върни!</h2>
    </div>
    @endif
    @endif
    <div class="custom-navbar" data-spy="affix" data-offset-top="197">
        <ul id="menu">
            <li><a href="#" class="active">Home</a></li>
            <li><a href="#">Movies</a></li>
            <li><a href="#">Games</a></li>
            <li><a href="#">Comics</a></li>
            <li><a href="#">Stores</a></li>
            <li style="float:right"><a href="#">Register</a></li>
            <li style="float:right"><a href="#">Login</a></li>
        </ul>
    </div>
    <div id="wrapper">
        @yield('content')
    </div>
    
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="/js/particles.min.js"></script>
    <script>
        $(document).ready(() => {
            particlesJS.load('background', '/js/particlesjs-config.json', () => {
                console.log('particles loaded');
            });
        });
    </script>
</body>
</html>