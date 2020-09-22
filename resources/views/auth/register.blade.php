@extends('auth.auth_layout')
@section('content')
<div class="main_container">
    <div class="flex_container">
        <div class="header">
            <div class="logo_con">
                <img src="{{asset('img/EnfoMeLogo.png')}}" alt="EnfoMe Logo">
            </div>
        </div>
        <div class="form">
        <form action="{{route('register')}}" method="POST" id="form">
            @csrf
            <div>
                <input type="text" name="firstName" placeholder="Enter Your First Name" id="name" class="linput @error('firstName') is-invalid @enderror" value="{{old('firstName')}}">
                @error('firstName')
                    <p style="color:#47030d;font-size:10px;"><code>{{ $message }}</code></p>
                @enderror
            </div>
            <div>
                <input type="text" name="lastName" placeholder="Enter Your Last Name" id="name" class="linput @error('lastName') is-invalid @enderror" value="{{old('lastName')}}">
                @error('lastName')
                    <p style="color:#47030d;font-size:10px;"><code>{{ $message }}</code></p>
                @enderror
            </div>
            <div>
                <input type="email" name="email" placeholder="Enter Your E-mail" id="email" class="linput @error('email') is-invalid @enderror" value="{{old('email')}}">
                @error('email')
                    <p style="color:#47030d;font-size:10px;"><code>{{ $message }}</code></p>
                @enderror
            </div>
            <div>
                <input type="tel" name="cell" placeholder="Enter Your Mobile Number" id="number" class="linput @error('cell') is-invalid @enderror" value="{{old('cell')}}">
                @error('cell')
                    <p style="color:#47030d;font-size:10px;"><code>{{ $message }}</code></p>
                @enderror
            </div>
            <div>
                <input type="password" name="password" placeholder="Enter A New Password" id="npass" class="linput @error('password') is-invalid @enderror">
                @error('password')
                    <p style="color:#47030d;font-size:10px;"><code>{{ $message }}</code></p>
                @enderror
            </div>
            <div>
                <input type="password" name="password_confirmation" placeholder="Enter The Password Again" id="cpass" class="linput @error('password') is-invalid @enderror">
                @error('password')
                    <p style="color:#47030d;font-size:10px;"><code>{{ $message }}</code></p>
                @enderror
            </div>
            <div class="checkboxes">
                <div class="cb1_con">
                    <input type="checkbox" name="cb1" id="cb1">
                    <label for="cb1" class="recheck tick_con1">
                        <div class="tick_con">
                            <div class="tick cb1"></div>
                        </div>
                    </label>
                    <p>Institute</p>
                </div>
                <div class="cb2_con">
                    <input type="checkbox" name="cb2" id="cb2">
                    <label for="cb2" class="recheck tick_con2">
                        <div class="tick_con">
                            <div class="tick cb2"></div>
                        </div>
                    </label>
                    <p>Student/Staff</p>
                </div>
                <div class="cb3_con">
                    <input type="checkbox" name="cb3" id="cb3">
                    <label for="cb3" class="recheck tick_con3">
                        <div class="tick_con">
                            <div class="tick cb3"></div>
                        </div>
                    </label>
                    <p>Gurdian</p>
                </div>
            </div>
            <small id="errorCb">ERRR</small>

            <div class="ins_reg">
                <div>
                    <input type="text" name="ins_reg_no" placeholder="Enter Institute Registration No." id="ins_reg">
                    <small id="errorIr">ERRR</small>
                </div>
                <div>
                    <input type="text" name="ins_name" placeholder="Enter Institute Name" id="ins_name">
                    <small id="errorIn">ERRR</small>
                </div>
                <select name="ins_selection" id="ins_selection">
                    <option value="select" selected>--Select Institute Type--</option>
                    <option>A</option>
                    <option>B</option>
                </select>
                <small id="errorIs">ERRR</small>
                <div class="address">
                    <label for="dis_selection">Address</label>
                    <select name="dis_selection" id="dis_selection">
                        <option value="select" selected>--Select District--</option>
                        <option>A</option>
                        <option>B</option>
                    </select>
                    <select name="uni_selection" id="uni_selection">
                        <option value="select" selected>--Select Union--</option>
                        <option>A</option>
                        <option>B</option>
                    </select>
                </div>
                <small id="errorId">ERRR</small>
            </div>

            <div class="stu_reg">
                <div>
                    <input name="stu_ins_name" type="text" placeholder="Enter Institute Name" id="stu_ins_name">
                    <small id="errorSn">ERRR</small>
                </div>
                <div class="address">
                    <label for="dis_selection_stu">Address</label>
                    <select name="dis_selection_stu" id="dis_selection_stu">
                        <option value="select" selected>--Select District--</option>
                        <option>A</option>
                        <option>B</option>
                    </select>
                    <select name="uni_selection" id="uni_selection_stu">
                        <option value="select" selected>--Select Union--</option>
                        <option>A</option>
                        <option>B</option>
                    </select>
                </div>
                <small id="errorSd">ERRR</small>
            </div>

            <div class="gur_reg">
                <div>
                    <input name="stu_id" type="tel" placeholder="Enter Student Id" id="stu_id">
                    <small id="errorG">ERRR</small>
                </div>
            </div>
            <button type="submit">Sign Up</button>
        </form>
        </div>
        <div class="form_footer">
            <p>Already have an account ? <a href="{{route('login')}}">Log In</a></p>
        </div>
    </div>
</div>

@endsection