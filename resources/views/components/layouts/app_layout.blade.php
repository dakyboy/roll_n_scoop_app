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

        *,
        *::after,
        *::before {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        * {
            list-style: none;
        }

        html {
            font-family: 'Roboto', sans-serif;
            font-size: 62.5%;
            width: 100%;
            overflow-x: hidden;
        }

        body {
            min-height: 100vh;
            font-size: 1.6rem;
            margin: 0 auto;
            background-color: #FFC0CB;
            color: #000000;
            overflow-x: hidden;
        }

        .app-container {
            display: flex;
            flex-flow: column;
            justify-content: space-between;
            align-items: center;
        }
      

        .main-container {
            display: flex;
            flex-flow: column wrap;
            justify-content: space-between;
            align-items: center;
        }

        .header {
            display: flex;
            flex-flow: column ;
            align-items: center;
        }

        .title {
            text-align: center;
            font-size: 4rem;
            margin: 0;
            margin-top: 16rem;
            text-shadow: #7DC4BD 2px 5px;
        }

        .sub-title {
            text-align: center;
            font-size: 2rem;
            text-shadow: #7DC4BD 1px 2px;
        }
    </style>
</head>

<body>
    <div class="app-container">
        <div class="header">
            <x-layouts.nav.navbar></x-layouts.nav.navbar>
            <x-layouts.content.title-banner>
                </x-content-title-banner>
        </div>
        <main>{{ $slot }}</main>
        <x-layouts.nav.footer></x-layouts.nav.footer>
    </div>
</body>

</html>
