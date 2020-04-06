<!DOCTYPE html>
<!--
Design by TEMPLATED
http://templated.co
Released for free under the Creative Commons Attribution License

Name       : SimpleWork 
Description: A two-column, fixed-width design with dark color scheme.
Version    : 1.0
Released   : 20140225

-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta name="viewport" content="width=device-width, initial-scale=1">
{{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.1.2/css/bulma.css"> --}}

    @yield('head');

<script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet" />
<link href="/css/default.css" rel="stylesheet"/>
<link href="/css/fonts.css" rel="stylesheet"/>
<link rel="stylesheet" href="{{ mix('css/app.css')}} ">

<!--[if IE 6]><link href="default_ie6.css" rel="stylesheet" type="text/css" /><![endif]-->

</head>
<body>
    <div id="header-wrapper">
        <div id="header" class="container">
            <div id="logo">
                <h1><a href="/">Simple CMS</a></h1>
            </div>
            <div id="menu">
                <ul>
                <li class="{{ Request::path() === '/' ? 'current_page_item' : ''}}"><a href="/" accesskey="1" title="">Home</a></li>
                    {{-- <li class="{{ Request::path() === 'clients' ? 'current_page_item' : ''}}"><a href="/clients" accesskey="2" title="">Our Clients</a></li> --}}
                    {{-- <li class="{{ Request::is('about') ? 'current_page_item' : ''}}"><a href="/about" accesskey="3" title="">About Us</a></li> --}}
                    <li class="{{ Request::path() === 'articles' ? 'current_page_item' : ''}}"><a href="/articles" accesskey="4" title="">記事一覧</a></li>
                    {{-- <li class="{{ Request::path() === 'contact' ? 'current_page_item' : ''}}"><a href="/contact" accesskey="5" title="">Contact Us</a></li> --}}
                </ul>
            </div>
        </div>
        {{-- TODO --}}
        @yield('header')
    </div>
    
    @yield('content')
    <div id="copyright" class="container">
        <p> Sudo Ai | Photos by <a href="http://fotogrph.com/">Fotogrph</a> | Design by <a href="http://templated.co" rel="nofollow">TEMPLATED</a>.</p>
    </div>
    <script src="js/app.js"></script>
</body>
</html>
