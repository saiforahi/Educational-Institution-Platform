@extends('layouts.app')

@section('content')
    <div class="header_container">
    </div>
    <div class="text_con">
        <div class="text_one">
            <h2>Verify Your Email Address</h2>
        </div>
        @if (session('resent'))
            <div class="text_one"> <h2>A fresh verification link has been sent to your email address.</h2></div>
            <div class="text_one"> <h2>If you did not receive the email,</h2></div>
        @else
            <div class="text_one"><h2>Before proceeding, please check your email for a verification link. If you did not receive the email,</h2></div>
        @endif
        <br>
        <form method="POST" action="{{ route('verification.resend') }}">
            @csrf
            <button type="submit">Click here to request another</button>
        </form>
    </div>
@endsection
