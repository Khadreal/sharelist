<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
	<meta charset="utf-8" name="author" content="Opeyemi Ibrahim">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<meta name="keywords" content=""/>
    <meta name="description" content=""/>
    <link rel="stylesheet" href="{{asset('css/styles.css',true)}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/app.css',true)}}" type="text/css">
    

</head>
<body>
	<header >
		<div class="logo pull-left">
			<a href="{{ url('/')}}">Sharelist</a>
		</div>
		<div class="logo pull-right">			
			<a href="{{ url('/playlists')}}">Playlist</a>
		</div>
		
	</header>
	@yield('content')

	
</body>
</html>