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
                <div class="title m-b-md">
                    Welcome to Trender
                </div>
                <div class="mx-auto welcome"  >
                    <a href='/register'>Click here to get started making your own Trender!</a>
                </div>
                <div class="frontpage" >
                    @if($graph_data)
                        <div class="card" >
                            <div class="card-body" style="height:44vh;position: relative; ">
                                <graph style="height:40vh;position: relative; " v-bind:graph-data="{{$graph_data}}"></graph>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
    </body>
    @endsection
</html>
