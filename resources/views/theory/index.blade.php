@extends('layouts.app')
@section('main')
<div class="theory">
    <div class="container">
        <div class="main_title">
            <p>
                Теоретический блок
            </p>
        </div>
        
        <div class="nav_blocks">

            <div class="nav_block">
                <a href="/theory/constitution">
                    <img src="{{asset("images/theory1.svg")}}" alt="">
                </a>
            </div>
            <div class="nav_block">
                <a href="/theory/criminalcode">
                    <img src="{{asset("images/theory2.svg")}}" alt="">
                </a>
            </div>
            <div class="nav_block">
                <a href="/theory/adminstrative">
                    <img src="{{asset("images/theory3.svg")}}" alt="">
                </a>
            </div>


        </div>
        <div class="nav_blocks">

            <div class="nav_block">
                <a href="/theory/videos">
                    <img src="{{asset("images/theory4.svg")}}" alt="">
                </a>
            </div>
            <div class="nav_block">
                <a href="/theory/test">
                    <img src="{{asset("images/theory5.svg")}}" alt="">
                </a>
            </div>


        </div>
    </div>
</div>


@endsection
