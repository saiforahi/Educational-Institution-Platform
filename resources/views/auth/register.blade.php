@extends('layouts.app')
@section('content')
<div class="full_width">
    <div class="container" id="container">
        <div class="common institute_container">
                <div class="ins_form_container">
                    <h1>Sign up as an Institute</h1>
                    <form action="{{ route('register') }}" method="POST">
                        @csrf
                        <input name="instituteName" type="text" placeholder="Institute Name" required value="{{old('instituteName')}}">
                        <input name="adminName" id="fullName" type="text" placeholder="Full Name" required value="{{old('adminName')}}">
                        <input name="adminPhone" id="phone_number" type="tel" class="@error('adminPhone') is-invalid @enderror" placeholder="Contact Number" required value="{{ old('adminPhone') }}">
                        @error('adminPhone')
                            <p style="color:#47030d;font-size:10px;"><code>{{ $message }}</code></p>
                        @enderror
                        <input name="adminEmail" id="email_address" type="email" class="@error('adminEmail') is-invalid @enderror" placeholder="E-mail Address" required value="{{old('adminEmail')}}">
                        @error('adminEmail')
                        <p style="color:#47030d;font-size:10px;"><code>{{ $message }}</code></p>
                        @enderror
                        <div id="showpass">
                            <input name="adminPassword" id="passwordMobStu" class="@error('adminPassword') is-invalid @enderror" type="password" placeholder="Password" required>
                            <span id="passchange" onclick="tooglepass()">Show</span>
                            @error('adminPassword')
                            <p style="color:#47030d;font-size:10px;"><code>{{ $message }}</code></p>
                            @enderror
                        </div>
                        <div id="showpass">
                            <input name="adminPassword_confirmation" type="password" placeholder="Confirm Password" id="confirm_password" required>  
                            <span id="conf" onclick="con()">Show</span>
                        </div>
                        <input name="instituteAddress" type="text" placeholder="Full Address" required value="{{old('address')}}">
                        <input name="instituteType" type="text" placeholder="Institute Type" value="{{old('instituteType')}}"><br>
                        <input name="submit" type="submit" value="submit" id="submit_btn">
                    </form>
                </div>
        </div>
        <div class="common student_container">
            <div class="stu_form_container">
                <h1>Sign up as an Student/Parent/Staff</h1>
                <form action="{{ route('register') }}" method="POST">
                    @csrf
                    <select name="user_type" id="instituteNameStud">
                        <option value="select" selected>--Select Occupation--</option>
                        <option value="teacher"> Teacher </option>
                        <option value="student"> Student </option>
                        <option value="parent"> Parent </option>
                        <option value="staff"> Staff </option>
                    </select><br>
                    <select name="institute" id="instituteNameStu">
                        <option value="select" selected> --Select-- </option>
                        @foreach ($institutes as $institute)
                        <option value="{{$institute->id}}"> {{$institute->name}} </option>
                        @endforeach
                    </select><br>
                    <input name="userName" id="fullNameStu" type="text" placeholder="Full Name" required>
                    <input name="userPhone" type="tel" class="@error('userPhone') is-invalid @enderror" placeholder="Contact Number" id="phone_numberStu" required>
                    @error('userPhone')
                        <p style="color:#47030d;font-size:10px;"><code>{{ $message }}</code></p>
                    @enderror
                    <input name="userEmail" type="email" class="@error('userEmail') is-invalid @enderror" placeholder="E-mail Address" id="email_addressStu" required>
                    @error('userEmail')
                        <p style="color:#47030d;font-size:10px;"><code>{{ $message }}</code></p>
                    @enderror
                    <div id="showpass">
                        <input name="userPassword" class="@error('userPassword') is-invalid @enderror" type="password" placeholder="Password" id="passwordStu">
                        <span id="passchangeStu" onclick="tooglepassStu()">Show</span>
                        @error('userPassword')
                        <p style="color:#47030d;font-size:10px;"><code>{{ $message }}</code></p>
                        @enderror
                    </div>
                    <div id="showpass">
                        <input name="userPassword_confirmation" type="password" placeholder="Confirm Password" id="confirm_passwordStu">
                        <span id="confStu" onclick="conStu()">Show</span>
                    </div><br>
                    <input type="submit" value="SIGN UP" id="submit_btn">
                </form>
            </div>
        </div>
        <div class="overlay_container">
            <div class="overlay" id="particles-js">
                <div class="panel ins_text_container">
                    <h1>Welcome</h1><br><br>
                    <h1>If you are from an Institute <br>Sign Up here on the right side.</h1> <br><br>
                    <h1>Or Sign Up as a Student/Parent/Staff <br> by clicking below button</h1>
                    <button id="insitute">Institute</button>
                </div>
                <div class="panel stu_text_container">
                    <h1>Welcome</h1><br><br>
                    <h1>If you are a Student/Parent/Staff<br>Sign Up here on the left side.</h1> <br><br>
                    <h1>Or if you are from an Institute <br> Sign Up by clicking below button</h1>
                    <button id="student">Student/Parent/Staff</button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="mobile_center">
    <div class="responsive_for_mobile">
        <h1>Sign up as an Institute</h1>
        <form action="{{route('register')}}" method="POST">
            <select name="institute" id="instituteName_mobile">
                <option value="select" selected>--Select Institute--</option>
                <option value="a"> Institute A </option>
                <option value="b"> Institute B </option>
                <option value="c"> Institute C </option>
            </select> <br>
            <input name="adminName" type="text" placeholder="Admin Name" id="fullNameMob"><br>
            <input name="adminPhone" type="tel" placeholder="Contact Number" id="phone_numberMob"><br>
            <input name="adminEmail" type="email" placeholder="E-mail Address" id="email_addressMob"><br>
            <div id="showpassMob">
                <input name="adminPassword" type="password" placeholder="Password" id="passwordMob">
                <span id="passchangeMob" onclick="tooglepassMob()">Show</span>
            </div>
            <div id="showpassMob">
                <input name="adminPassword_confirmation" type="password" placeholder="Confirm Password" id="confirm_passwordMob">
                <span id="confMob" onclick="conMob()">Show</span>
            </div>
            <input name="instituteAddress" type="text" placeholder="Full Address" id="addressMob"><br>
            <input name="instituteType" type="text" placeholder="Institute Type" value="{{old('instituteType')}}"><br>
            <input name="submit" type="submit" value="SIGN UP" id="submit_btn"><br><br><br>
            <a href="{{route('mobile_reg')}}" id="submit_btn pad" class="size">Sign up as a Student/Parent/Staff</a>
        </form>
    </div>
</div>
<div id="mobile_particles-js"></div>
@endsection