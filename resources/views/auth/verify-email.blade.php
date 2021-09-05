@extends('layouts.app1')
@section('custom_styles')
<style>
    main{
        overflow-x: hidden;
    }
    .message{
        font-family: ubuntu;
        font-weight: 300;
        /* letter-spacing: .2rem; */
        
    }
    .message .top{
        letter-spacing: .2rem;
        font-size: 1.5rem;
        text-transform: capitalize;
        display: inline-block;
        margin-top: 1rem;
        margin-left: 0px;
    }

        .message .sub{
        letter-spacing: .1rem;
        font-size: 1.1rem;
        text-transform: capitalize;
        display:    block;
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

        <div class="my-5 col-md-4 message">
            <p class="message" >
                <strong class="top">Thanks for signing up! </strong> <br> Before getting started, could you verify your email address by clicking on the link we just emailed to you  <hr>
                <strong class="sub"> Didn't get the mail? </strong>
                Don't worry
                If you didn't receive the email, feel free to request a new one, we will gladly send you another.
            </p>

            <div class=" d-flex justify-content-between ">
                <form method="post" action="{{ route('verification.send') }}" class="my-3">
                    @csrf
                    <div>
                        <input type="submit" class="genric-btn radius primary " value="Resend Verification Email" />
                    </div>
                </form>

                <form method="POST" action="{{ route('logout') }}" class="my-5">
                    @csrf

                    <button type="submit" class="genric-btn radius danger">
                        Log Out
                    </button>
                </form>
            </div>
            <!-- <br><br><br><br><br><br><br><br><br><br> -->
        </div> 

    </div>


</main>

@endsection