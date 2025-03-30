@extends("layouts.app")
@section("main")
    <div class="main">
        <div class="container">
            <div class="main_title">
                <p>
                    41-й Батальон
                </p>
            </div>
            <p class="scenario-description">Отдел, отвечающий за безопасность и техническую поддержку, обеспечивающий бесперебойную работу всех систем.</p>


            <div class="nav_blocks">

                <div class="nav_block">
                    <a href="/training/hostage  ">
                        <img src="{{asset("images/frame1.svg")}}" alt="">
                    </a>
                </div>
                <div class="nav_block">
                    <a href="/analysis">
                        <img src="{{asset("images/frame2.svg")}}" alt="">
                    </a>
                </div>
                <div class="nav_block">
                    <a href="/theory">
                        <img src="{{asset("images/frame3.svg")}}" alt="">
                    </a>
                </div>

            </div>
            <div class="nav_block" style="text-align: center; margin:30px;">
                <a href="/cells">
                    <img src="{{asset("images/vr.svg")}}" alt="">
                </a>
            </div>
        </div>
    </div>
@endsection