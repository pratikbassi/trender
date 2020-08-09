@extends('layouts.app')

@section('content')
        <div style="width:80vw; margin:auto; padding:2vh;" >
            <div class="card" >
                <div class="card-header">Single Graph View</div>

                <div class="card-body" >

                    <graph :data="{{$graph_data}}"></graph>
                    <bar :data="{{$graph_data}}"></bar>
                </div>
            </div>
        </div>
@endsection
