@extends('layouts.app1')
@section('custom_styles')
<style>
  main {
    overflow-x: hidden;
  }

  .message {
    font-family: ubuntu;
    font-weight: 300;
    /* letter-spacing: .2rem; */

  }

  .message .top {
    letter-spacing: .2rem;
    font-size: 1.5rem;
    text-transform: capitalize;
    display: inline-block;
    margin-top: 1rem;
    margin-left: 0px;
  }

  .message .sub {
    letter-spacing: .1rem;
    font-size: 1.1rem;
    text-transform: capitalize;
    display: block;
    /* margin: .5rem; */
    margin-left: 0px;
  }
</style>
@endsection
@section('main')
<main>
  <div class="row">
    <div class="col-md-3 ">
      <!-- spacer -->
    </div>

    <div class="col-md-4 message">
      <div class="my-5">
        <div class=" my-2">
          <p class=" message alert-success text-success spacious-1">
            @If (session('status')){{ session('status') }} @endif </p>
        </div>

        <form method="POST" action="{{ route('password.update') }}" class="m-3" onsubmit="__submit('password_reset_btn')">
          <legend class="text-center">
            <label for="registered_email">Reset Password</label>
          </legend>
          @csrf
          {{-- {{ dd($request['token']), Hash::check }} --}}
          <!-- password reset token -->
          <input type="hidden" name="token" value="{{ $request->route('token') }}" />

          <div class="form-group">
            <p class="alert-danger text-danger spacious-1"> 
              @error('email'){{ 'Oops! '. $message }}@enderror
              @error('password')
              {{ 'Oops! '. $message }}
              @enderror
            </p>
          </div>
          <div class="form-group">
            <input type="email" name="email" id="registered_email" class="form-control"
              value="{{ old('email', $request->email) }}" placeholder="eg. example@example.com" />
          </div>
          <div class="form-group">
            <input type="password" name="password" id="password_confirmation" class="form-control"
              placeholder="Choose a new password" />
          </div>

          <div class="form-group">
            <input type="password" name="password_confirmation" id="password_confirmation" class="form-control"
              placeholder="Confirm your new password" />
          </div>


          <div class="form-group my-1">
            <input type="submit" class="genric-btn radius primary form-control" value=" Reset Password" name="password_reset_btn"/>
          </div>

        </form>
      </div>

    </div>

  </div>
</main>
@endsection