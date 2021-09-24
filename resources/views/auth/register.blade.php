@extends('layouts.authpages')
@section('styles')
<style>
    .wrapper {
        transform: scale(.75)  translateY(-10rem);
        /* animation-duration: 3s; */
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
<div class="login-form-content">
    <h2 class="ubuntu">Register</h2>
    <form action="#" class="signin-form" method="post">
        @csrf
        <div class="one-frm">
            <input class="@error('fname')invalid-block @enderror" type="text" name="fname" placeholder="First Name" requiredsz="" autofocus value="{{ old('fname') }}">
            @error('fname')
            <strong class="text-center error mt--1">Oops! {{ $errors->first('fname') }}</strong>
            @enderror
        </div>

        <div class="one-frm">
            <input class="@error('lname')invalid-block @enderror" type="text" name="lname" placeholder="Last Name" requiredsz="" value="{{ old('lname') }}">
            @error('lname')
            <strong class="text-center error mt--1">Oops! {{ $errors->first('lname') }}</strong>
            @enderror
        </div>

        <div class="one-frm">
            <input class="@error('username')invalid-block @enderror" type="text" name="username" placeholder="Choose a Username" requiredsz="" value="{{ old('name') }}">
            @error('name')
            <strong class="text-center error mt--1">Oops! {{ $errors->first('name') }}</strong>
            @enderror
        </div>

        <div class="one-frm">
            <input class="@error('email')invalid-block @enderror" type="email" name="email" placeholder="Email" requiredsz="" value="{{ old('email') }}">
            @error('email')
            <strong class="text-center error mt--1">Oops! {{ $errors->first('email') }}</strong>
            @enderror
        </div>

        <div class="one-frm">
            <input class="@error('password')invalid-block @enderror" type="password" name="password" placeholder="Password" requiredsz="">
            @error('password')
            <strong class="text-center error mt--1">Oops! {{ $errors->first('password') }}</strong>
            @enderror
        </div>

        <div class="one-frm">
            <input class="@error('password_confirmation')invalid-block @enderror" type="password" name="password_confirmation" placeholder="Confirm Password" requiredszsz="">
            @error('confirm_password')
            <strong class="text-center error mt--1">Oops! {{ $errors->first('fname') }}</strong>
            @enderror
        </div>
        <button class="btn btn-style mt-1" type="submit">Create Account </button>
        <p class="already">Alredy have an account? <a href="{{ route('login') }}">Login</a></p>
    </form>
</div>
@endsection