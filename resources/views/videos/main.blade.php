@extends("layouts.app")
@section("main")
    <div class="videos_main">
        <div class="container">
            <div class="main_title">
                <p>
                    Анализ действий
                </p>
            </div>
            
            <div class="nav_blocks">

                <div class="nav_block">
                    <a href="/videos">
                        <img src="{{asset("images/left.svg")}}" alt="">
                    </a>
                </div>
                <div class="nav_block">
                    <a href="/videos/post">
                        <img src="{{asset("images/right.svg")}}" alt="">
                    </a>
                </div>

            </div>
        </div>
    </div>
@endsection