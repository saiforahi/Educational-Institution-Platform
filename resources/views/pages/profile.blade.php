@extends('layouts.app')
@section('content')
    @include('layouts.header')
    <!--Body-->
    <div class="body_container">
        <!--Responsive Tools-->
        <div id="body_container"></div>
        @include('layouts.body_left')

        <!--Center of body-->
        <!--Form body-->
        <div class="center_feed" id="bg_one">
            <div class="profile_edit_container">
                <div class="profile_edit_img">
                    <img src="{{asset('img/e_meet/Profile.png')}}" alt="Profile Picture">
                </div>
                <div class="profile_edit_main">
                    <form action="#" name="edit_profile_name">
                        <div class="edit_name">
                            <input type="text" placeholder="Md Zahid Ul Islam Saikat" readonly autocomplete="off" name="edit_name">
                        </div>
                        <div class="edit_email">
                            <input type="email" placeholder="saikat123321098@gmail.com" readonly autocomplete="off" name="edit_email">
                        </div>
                        <div class="edit_number">
                            <input type="tel" placeholder="01828044638" readonly autocomplete="off" name="edit_number">
                        </div>
                        <div class="edit_password">
                            <input type="password" value="123456" readonly autocomplete="off" name="edit_password">
                        </div>
                        <div class="edit_profile_btn" id="edit_profile_btn">
                            <p id="edit_btn">Edit</p>
                        </div>
                        <div class="update_profile_btn" id="update_profile_btn">
                            <button id="update_btn">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        @include('layouts.body_right')
        <!--Center of body-->

       
    </div>
@endsection