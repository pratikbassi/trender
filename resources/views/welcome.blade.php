@extends('layouts.app')
<style>


</style>

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
                <div class="title">
                    Welcome to Trender
                </div>
                <div class="mx-auto "  >
                    <a href='/register'>Click here to get started making your own Trender!</a>
                </div>
                <div class="frontpage" >
                    @isset($graph_data)
                                <dash style="height:60vh;position: relative; " :data="{{$graph_data}}"></dash>
                    @endisset
                </div>
            </div>
    </body>
    @endsection
</html>
