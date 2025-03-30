@extends("layouts.app")
@section("main")
    <div class="videos_main">
        <div class="container">
            <p class="choose-scenario-title">ВХОД</p>
            <form class="auth_form" method="POST" action={{"login"}}>
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <!-- Username -->
                    <input class="file_input" placeholder="Логин" id="username" type="text" name="username" value="{{ old('username') }}" required autofocus autocomplete="username">
                    <!-- Error message for username can be displayed here -->

                <!-- Password -->
                    <input class="file_input" style="margin: 10px 0" placeholder="Пароль" id="password" type="password" name="password" required autocomplete="current-password">
                    <!-- Error message for password can be displayed here -->


                    <!-- Submit Button -->
                    <button type="submit"  class="submit_button">Войти</button>
            </form>
        </div>
    </div>
@endsection