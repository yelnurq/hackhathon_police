@extends('layouts.app')
@section('main')
<div class="theory">
    <div class="container">
        <div class="main_title">
            <p>
                Админстративный кодекс РК
            </p>
        </div>
        <iframe src="{{asset('/pdf/Кодекс_Республики_Казахстан_об_административных_правонарушениях.pdf')}}" width="100%" height="1000px"></iframe>


    </div>
</div>


@endsection
