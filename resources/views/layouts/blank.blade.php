<!DOCTYPE html>
<html lang="sk">

<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="NOOKOM">

		<title>
			@section('title')
            REGISTRATION PLATFORM
			@show
		</title>


		<!-- CSS are placed here -->
		<link href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/jquery.bootstrapvalidator/0.5.0/css/bootstrapValidator.min.css"/>
        {{ Html::style('css/sb-admin.css') }}
        {{ Html::style('css/ladda-themeless.min.css') }}
        {{ Html::style('css/flag-icon.min.css') }}
		{{ Html::style('css/app.css') }}

</head>

<body>
		<!-- Content -->
		@yield('content')

		<footer><span><a href="{{ URL::to('/admin/') }}">Created with <3</a> by bero.tech</span></footer>

		<!-- Core JavaScript Files -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

		{{ Html::script('js/bootstrap.min.js') }}


	</body>
</html>
