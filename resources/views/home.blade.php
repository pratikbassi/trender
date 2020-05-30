@extends('layouts.app')
<style>
.item {
        border-width: 2px ;
        border-style: solid ;
        border-color:  #8d6b94;
        border-radius: 25px  ;
        background: #fff;
        display: grid;
        grid-template-areas:
            'toggle keyword space nodes'
        ;
        grid-template-columns: 20vw 20vw auto 20vw;
        grid-template-rows: 80px;
        justify-items: left;
        align-items: center;
        height: 80px;
        padding-left: 1.5vw;
        padding-right: 2vw;
        padding-top: 3px;
        -webkit-transition: .4s;
        transition: .4s;
        margin: 1vh;
    }


    /* The switch - the box around the slider */
    .switch {
        grid-area: toggle;
        position: relative;
        display: inline-block;
        width: 60px;
        height: 34px;
    }

    /* Hide default HTML checkbox */
    .switch input {
        opacity: 0;
        width: 0;
        height: 0;
    }

    /* The slider */
    .slider {
        position: absolute;
        cursor: pointer;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: #cf5c36;
        -webkit-transition: .4s;
        transition: .4s;
    }

    .slider:before {
        position: absolute;
        content: "";
        height: 26px;
        width: 26px;
        left: 4px;
        bottom: 4px;
        background-color: white;
        -webkit-transition: .4s;
        transition: .4s;
    }

    input:checked+.slider {
        background-color: #8d6b94;
    }


    input:focus+.slider {
        box-shadow: 0 0 1px #8d6b94;
    }


    input:checked+.slider:before {
        -webkit-transform: translateX(26px);
        -ms-transform: translateX(26px);
        transform: translateX(26px);
    }

    /* Rounded sliders */
    .slider {
        border-radius: 34px;
    }

    .slider:before {
        border-radius: 50%;
    }



</style>
@section('content')
        <div style="width:80vw; margin:auto; padding:2vh;" >
            <div class="card" >
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif


                </div>
            </div>
        </div>
@endsection
