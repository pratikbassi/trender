@extends('layouts.app')

@section('content')
        <div class="" style="width:80vw; margin:auto; padding:2vh;" >
            <div class="card" >
                <div class="card-header">Single Graph View</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <graph v-bind:graph-data="{{$graph_data}}"></graph>
                </div>
            </div>
        </div>
@endsection
