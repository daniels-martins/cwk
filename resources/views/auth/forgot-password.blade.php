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
            @if(Session::has('status'))
            {{-- {{ 'what do u mean? Good!' }} --}}
            @else
            {{-- {{ 'Bad one? bad!' }} --}}

            @endif
        </div>

        <div class="col-md-4 message">
            <div class="my-5">
                <p class="message my-2">
                    <strong class="top">Dear Valued Customer! </strong> <br> <br>
                <p class="alert-success text-success spacious-1">
                    @If (session('status')){{ session('status') }} @endif
                </p>
                <strong class="sub">Forgot your password? </strong> No problem. Just let us know your email address and
                we will email you a password reset link that will allow you to choose a new one.
                </p>

                <form method="POST" action="{{ route('password.email') }}" class="my-3">
                    @csrf
                    <div class="form-group">
                        <label for="registered_email">Enter your registered email address with us</label>

                        {{-- <p class="alert-success text-success spacious-1">
                            @If (session('status')){{ __(session('status')) }} @endif
                        </p> --}}
                        <p class="alert-danger text-danger spacious-1"> @error('email'){{ 'Oops! '. $message }}@enderror
                        </p>
                        <input type="email" name="email" id="registered_email" class="form-control"
                            value="{{ old('email') }}" placeholder="eg. example@example.com" />
                    </div>

                    <div class="form-group my-1">
                        <input type="submit" class="genric-btn radius primary form-control"
                            value="Email Password Reset Link" />
                    </div>

                </form>
            </div>

            <div class="my-5">
                <p class="my-3 message">
                    <strong class="sub my-2"> Didn't get the mail? </strong>
                    Don't worry
                    If you didn't receive the email, feel free to request a new one, we will gladly send you another.
                </p>

                <form method="post" action="{{ route('password.email') }}" class="">
                    @csrf
                    <div class="form-group">
                        {{-- <p class="alert-success text-success spacious-1">
                            @If (session('status')){{ session('status') }} @endif
                        </p>
                        <p class="alert-danger text-danger spacious-1"> @error('email'){{ 'Oops! '. $message }}@enderror
                        </p> --}}
                        <input type="hidden" name="email" id="registered_email" class="form-control"
                            value=" @If (session('emailed')){{ session('emailed') }} @endif"
                            placeholder="eg. example@example.com" />
                        <input type="submit" class="genric-btn radius primary form-control"
                            value="Request New Email Password Reset Link" />
                    </div>

                </form>

            </div>
        </div>

    </div>


</main>

@endsection