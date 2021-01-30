@extends('layputs.app')
@section('head')


<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>みんなの、23区。</title>

<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}" defer></script>

<!-- Fonts -->
<link rel="dns-prefetch" href="//fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=M+PLUS+Rounded+1c:wght@100;500;900&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Kosugi+Maru&display=swap" rel="stylesheet">

<!-- Styles -->
<link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<link href="{{ asset('css/dot.css') }}" rel="stylesheet">
<link href="{{ asset('css/modal.css') }}" rel="stylesheet">
<link href="{{ asset('css/form.css') }}" rel="stylesheet">

@endsection