@extends('layouts.app')
<style>


</style>

<script>


</script>


@section('content')
<div style="width:80vw; margin:auto; padding:2vh;">
    <div class="card">
        <div class="card-header">Your Graph Link:</div>

        <div class="card-body" style="overflow: scroll; max-height:64vh;">
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
