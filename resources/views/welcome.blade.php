@extends('layouts.app')


<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Trender</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->

    </head>
    @section('content')
    <body>

            <div class="content">
                <div class="title m-b-md">
                    Welcome to Trender
                </div>
                <div class="card mx-auto" style='width: 20vw; padding: 10px;' >
                    <a href='/register'>Welcome to Trender! Click here to get started</a>
                </div>
            </div>
    </body>
    @endsection
</html>
