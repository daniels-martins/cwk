@extends('layouts.authpages')
@section('styles')
<style>
    .wrapper {
        transform: scale(.9) translateY(1rem);

    }
</style>
<script>
window.onload = ()=>{
        document.querySelector('body').classList.add('loaded')
}
</script>
@endsection
@section('loader')
@include('partials/loader1')
@endsection
@section('form')
@If (session('password_reset_status')){{ session('password_reset_status') }} @endif 

<div class="login-form-content">
    <h2 class="ubuntu">Login</h2>
    @error('email')
    <strong class="text-center error mt--1">Oops!{{ $errors->first('email') }}</strong>
    @enderror
    <form action="{{ route('login') }}" class="signin-form" method="POST">
        @csrf
        <div class="one-frm">
            <input class="@error('email')invalid-block @enderror" type="email" name="email" placeholder="Email" required="" value="{{ old('email') }}" autofocus>

        </div>
        <div class="one-frm">
            <input type="password" name="password" placeholder="Password" required="">
            @error('password')
            <strong class="text-center error mt--1">Oops!
                {{ $errors->first('password') }}</strong>
            @enderror
        </div>
        <label class="check-remaind">
            <input type="checkbox">
            <span class="checkmark"></span>
            <p class="remember">Remember Me</p>

        </label>
        <button class="btn btn-style" type="submit">Login </button>
        <div class="text-center mt-1">
            @if(Route::has('password.request'))
            <a class="link" href="{{ route('password.request') }}">
                {{ __('Forgot your password?') }}
            </a>
            @endif
        </div>
        <p class="already">Are you new here?
            <a href={{ route("register") }}>Sign up</a>
        </p>
    </form>
</div>
@endsection