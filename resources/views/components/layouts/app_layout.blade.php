<!DOCTYPE html>
<html lang="en">

<head>
    <title> {{ $title }} </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="preload" href="{{ secure_asset('/css/app_layout.css') }}" as="style"
        onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
        <link rel="stylesheet" href="{{ secure_asset('/css/app_layout.css') }}">
    </noscript>
    <style>
        /*Reset*/
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            
        }

        html {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            min-height:100%;
            font-size: 62.5%;
            min-width: 90%;
            margin: 0 auto;

        }

        body {
            font-size: 1.6rem;
            min-height:100vh;
            min-width: 300px;
            margin: 0vh auto;
            background-color: #FFC0CB;
            color: #000000;
            scrollbar-width: thin;
        }

        .app-container {
            display: flex;
            flex-flow: column wrap;
            justify-content: space-between;
            align-items: center;
        }

        .title-text {
            flex: 1;
        }

        .main-container {
            display: flex;
            flex-flow: column wrap;
            justify-content: space-between;
        }

        .title {
            text-align: center;
            font-size: 9rem;
            margin: 0;
            padding: 0 5%;
            text-shadow: #7DC4BD 2px 5px;
        }

        .sub-title {
            text-align: center;
            font-size: 2rem;
            margin: 2vh;
            padding: 0 20%;
            text-shadow: #7DC4BD 1px 2px
        }
    </style>
</head>

<body>
    <div class="app-container">
        <header>
            <x-layouts.nav.navbar></x-layouts.nav.navbar>
            <x-layouts.content.title-banner></x-content-title-banner>
        </header>
        <main>{{ $slot }}</main>
        <x-layouts.nav.footer></x-layouts.nav.footer>
    </div>
</body>

</html>
