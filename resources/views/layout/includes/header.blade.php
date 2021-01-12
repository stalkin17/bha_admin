<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf_token" content="{{csrf_token()}}">
        <title>{{config('app.name', 'User Management System')}}</title>    
        <!-- Styles -->
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <!-- scripts -->
        <script src="{{asset('js/app.js')}}" defer></script>
    </head>
    <body>
     <div class="relative">
         <!-- -----------------banner for this template starts here --------------------------------------->	     
		<div class="container-fluid m-0 p-0">
			<img src="{{asset("assets/banner.png")}}" alt="banner" width="100%" class="img-responsive">
		</div>
<!-- --------------------------------banner for this template ends here -------------------------->