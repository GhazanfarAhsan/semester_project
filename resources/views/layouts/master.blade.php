<!doctype html>
<html>

<head>

	<meta charset="utf-8">
	@if(isset($MetaData))
		<title>{{$MetaData->title}}</title>
		<meta name="keyword" content="{{$MetaData->keyword}}">
		<meta name="discription" content="{{$MetaData->description}}">
		<meta name="viewport" content="width=device-width, initial-scale=1">
	@else
		<title>Shopping Idea Usa</title>
		<meta name="keyword" content="">
		<meta name="discription" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">
	@endif
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ asset('css/extra.css') }}" rel="stylesheet" type="text/css">
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lato|Roboto|Roboto+Condensed|Roboto+Mono|Roboto+Slab&display=swap" rel="stylesheet">
	<script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
   <!--  <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
</head>

<body>
	
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border padding">
		 @include('layouts.header')
	</div>
	
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border padding">
		@if(\Request::path() == '/')
		 	@include('layouts.banner')
		@endif 
	</div>

	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border padding">
		<!-- Put Middel Things -->	
	 		@yield('content')
	 <!-- End Put Middle things -->
	</div>
	
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 border padding">
		@include('layouts.footer')
	</div>



</body>



 

</html>