@extends('layouts.app')
@section('content')
<button id="button-top" class="btn-open">Open This Pack</button>
<div id="pack-opened" class="col-xs-12">

        <div class="pack-content" style="display: block !important; visibility: visible !important;" >
            <div class="pack-flash">
                <div class="pack-flash-pack" >
                    <img class="front" src="https://cdn.discordapp.com/attachments/576269402463404033/880108698071101510/editado.png" >
                    <div class="top">
                        <img src="{{ asset('img\label1.png') }}">
                        <div class="cut"> 
                            <img src="{{ asset('img\flash.png') }}">
                        </div>
                        <span> 
                            <img src="{{ asset('img\label2.png') }}">
                            <span>
                                <img src="{{ asset('img\label3.png') }}">
                                <span>
                                    <img src="{{ asset('img\label4.png') }}" style="width: 81px"> 
                                </span>
                            </span>
                        </span>
                    </div>
                </div>
            </div>
        </div>
</div>
@endsection
