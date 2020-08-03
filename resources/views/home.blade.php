@extends('layouts.app')


@section('content')
<div class="dash" >
    <div class="card">
        <div class="card-body" style="overflow: scroll; height:68vh;">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            Toggle which lines you want to add to your graph!
                <index v-bind:graph="{{json_encode($graphData)}}"></index>

        </div>
    </div>
</div>
@endsection
