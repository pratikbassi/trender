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
                <div class="card m-2">
                    Trender is a simple app that allows users to produce and examine keyword trends on news websites over time.
                </div>
                <div class="card m-2">
                    Screenshot of graph here
                </div>
                <div class="card m-2">
                    Screenshot of dashboard here
                </div>
            </div>
    </body>
    @endsection
</html>
