@extends('layouts.app')

@section('content')
        <div class="col-md-8" style="max-width:40vw; margin:auto;padding:2vh;">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
@endsection
