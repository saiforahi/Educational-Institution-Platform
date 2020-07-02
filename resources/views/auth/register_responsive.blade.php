@extends('layouts.app')
@section('content')
<div class="mobile_center">
    <div class="responsive_for_mobile color">
        <h1>Sign up as an Student/Parent/Staff</h1>
            <form action="{{route('register')}}" method="POST">
                @csrf
                <select name="user_type" id="instituteName_mobileStud">
                    <option value="select" selected>--Select Occupation--</option>
                    <option value="teacher"> Teacher </option>
                    <option value="student"> Student </option>
                    <option value="parent"> Parent </option>
                    <option value="staff"> Staff </option>
                </select><br>
                <select name="institute" id="instituteName_mobileStu">
                    <option value="select" selected> --Select-- </option>
                    @foreach ($institutes as $institute)
                    <option value="{{$institute->id}}"> {{$institute->name}} </option>
                    @endforeach
                </select> <br>
                <input name="userName" type="text" placeholder="Full Name" id="fullNameMobStu">
                <input name="userPhone" class="@error('userPhone') is-invalid @enderror" type="tel" placeholder="Contact Number" id="phone_numberMobStu">
                @error('userPhone')
                <p style="color:#47030d;font-size:10px;"><code>{{ $message }}</code></p>
                @enderror
                <input name="userEmail" type="email" class="@error('userEmail') is-invalid @enderror" placeholder="E-mail Address" id="email_addressMobStu">
                @error('userEmail')
                        <p style="color:#47030d;font-size:10px;"><code>{{ $message }}</code></p>
                    @enderror
                <div id="showpassMob">
                    <input name="userPassword" class="@error('userPassword') is-invalid @enderror" type="password" placeholder="Password" id="passwordMobStu">
                    <span id="passchangeMob" onclick="tooglepass()">Show</span>
                    @error('userPassword')
                        <p style="color:#47030d;font-size:10px;"><code>{{ $message }}</code></p>
                        @enderror
                </div>
                <div id="showpassMob">
                    <input name="userPassword_confirmation" type="password" placeholder="Confirm Password" id="confirm_passwordMobStu">
                    <span id="confMob" onclick="con()">Show</span>
                </div>
                <input type="submit" value="SIGN UP" id="submit_btn">
                <br><br><br>
                <a href="{{route('register')}}" id="submit_btn pad" class="size">Sign up as an Institute</a>
            </form>
        </div>
    </div>
    <div id="particles-js"></div>
    
@endsection