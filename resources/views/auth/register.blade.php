@extends('layouts.app')
@section('content')
<div class="full_width">
    <div class="container" id="container">
        <div class="common institute_container">
                <div class="ins_form_container">
                    <h1>Sign up as an Institute</h1>
                    <form action="{{ route('register') }}" method="POST">
                        @csrf
                        <input name="institute" type="text" placeholder="Institute Name" required>
                        <input name="fullname" type="text" placeholder="Full Name" required>
                        <input name="phone" type="tel" placeholder="Contact Number" required>
                        <input name="email" type="email" placeholder="E-mail Address" required>
                        <input class="@error('password') is-invalid @enderror" name="password" type="password" placeholder="Password" required>
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <input name="password_confirmation" type="password" placeholder="Confirm Password" required>
                        <input name="address" type="text" placeholder="Full Address" required>
                        <input name="instituteType" type="text" placeholder="Institute Type"><br>
                        <input name="submit" type="submit" value="submit" id="submit_btn">
                    </form>
                </div>
        </div>
        <div class="common student_container">
            <div class="stu_form_container">
                <h1>Sign up as an Student/Parent/Staff</h1>
                <form action="#">
                    <input name="name" type="text" placeholder="Full Name" required>
                    <input name="phone" type="tel" placeholder="Contact Number" required>
                    <input name="email" type="email" placeholder="E-mail Address" required>
                    <input name="password" type="password" placeholder="Password" required>
                    <input name="password_confirmation" type="password" placeholder="Confirm Password" required>
                    <select name="institute" id="instituteName">
                        <option value="select" selected> --Select-- </option>
                        <option value="a"> Institute A </option>
                        <option value="b"> Institute B </option>
                        <option value="c"> Institute C </option>
                    </select> <br>
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
                    <button id="insitute">Student/Parent/Staff</button>
                </div>
                <div class="panel stu_text_container">
                    <h1>Welcome</h1><br><br>
                    <h1>If you are a Student/Parent/Staff<br>Sign Up here on the left side.</h1> <br><br>
                    <h1>Or if you are from an Institute <br> Sign Up by clicking below button</h1>
                    <button id="student">Institute</button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="mobile_center">
    <div class="responsive_for_mobile">
        <h1>Sign up as an Institute</h1>
        <form action="#">
            <input type="text" placeholder="Institute Name" required><br>
            <input type="text" placeholder="Full Name" required><br>
            <input type="tel" placeholder="Contact Number" required><br>
            <input type="email" placeholder="E-mail Address" required><br>
            <input type="password" placeholder="Password" required><br>
            <input type="password" placeholder="Confirm Password" required><br>
            <input type="text" placeholder="Full Address" required><br>
            <input type="text" placeholder="Institute Type"><br>
            <input type="submit" value="SIGN UP" id="submit_btn"><br><br><br>
            <a href="pages/index.html" id="submit_btn" class="size">Sign up as a Student/Parent/Staff</a>
        </form>
    </div>
</div>
<div id="mobile_particles-js"></div>
@endsection