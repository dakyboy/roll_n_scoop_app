<!DOCTYPE html>
<html lang="en">
    <head>
        <title> {{$title}} </title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="{{ secure_asset('/css/app_layout.css') }}" />
    </head>
    <body>
        <x-layouts.nav.navbar>

        </x-layouts.nav.navbar>
        <main>{{$slot}}</main>
    </body>
</html>
