@extends('layouts.app')

@section('content')
<div class="col-md-8 my-auto" style="max-width:40vw; margin:auto;padding:2vh;">
    <div class="card my-auto">
        <div class="card-header">{{ __('Register') }}</div>

        <div class="card-body">
            <form method="POST" action="{{ route('insert') }}">
                @csrf

                <div class="form-group row">
                    <label for="keyword" class="col-md-4 col-form-label text-md-right">{{ __('Keyword') }}</label>

                    <div class="col-md-6">
                        <input id="keyword" type="text" class="form-control @error('keyword') is-invalid @enderror"
                            name="keyword" value="{{ old('keyword') }}" required autocomplete="keyword" autofocus>

                        @error('keyword')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="url" class="col-md-4 col-form-label text-md-right">{{ __('Url') }}</label>

                    <div class="col-md-6">
                        <input id="url" class="form-control @error('url') is-invalid @enderror"
                            name="url" value="{{ old('url') }}" required autocomplete="url">

                        @error('url')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row mb-0">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Submit') }}
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
