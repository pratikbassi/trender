@extends('layouts.app')

@section('content')
        <div style="width:98vw; margin:auto; padding:2vh;" >


                    <dash :data="{{$graph_data}}"></dash>

        </div>
@endsection
