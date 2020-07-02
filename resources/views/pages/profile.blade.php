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
        <!--Center of body-->

        <!--Right Side of body-->
        <div class="right_menu" id="bg_two">
            <p>Sponsored</p>
            <!--Ads-->
            <div class="all_add_container">
            <a href="#">
                <div class="ad_container">
                    <img src="{{asset('img/e_meet/Ad Image.png')}}" alt="Img">
                    <div class="ad_texts_con">
                        <div class="ad_text_head">
                            <p class="ad_line_one">Advertisement headline
                            </p>
                            <p class="ad_line_two">text goes here</p>
                        </div>
                        <div class="ad_text_website">
                            <p class="ad_website">www.website.com</p>
                        </div>
                    </div>
                </div>
            </a>
            <a href="#">
                <div class="ad_container">
                    <img src="{{asset('img/e_meet/Ad Image.png')}}" alt="Img">
                    <div class="ad_texts_con">
                        <div class="ad_text_head">
                            <p class="ad_line_one">Advertisement headline
                            </p>
                            <p class="ad_line_two">text goes here</p>
                        </div>
                        <div class="ad_text_website">
                            <p class="ad_website">www.website.com</p>
                        </div>
                    </div>
                </div>
            </a>
            <a href="#">
                <div class="ad_container">
                    <img src="{{asset('img/e_meet/Ad Image.png')}}" alt="Img">
                    <div class="ad_texts_con">
                        <div class="ad_text_head">
                            <p class="ad_line_one">Advertisement headline
                            </p>
                            <p class="ad_line_two">text goes here</p>
                        </div>
                        <div class="ad_text_website">
                            <p class="ad_website">www.website.com</p>
                        </div>
                    </div>
                </div>
            </a>
            </div>
            <div class="ad_under_line"></div>
            <!--Ads-->
            <!--Contact-->
            <div class="contact_section">
                <p>CONTACT US</p>
            </div>
            <div class="contant_item call">
                <img src="{{asset('img/e_meet/Call.png')}}" alt="Call">
                <p>+8801319714385</p>
            </div>
            <div class="contant_item message">
                <img src="{{asset('img/e_meet/Message.png')}}" alt="Mail">
                <p>enfomebd@gmail.com</p>
            </div>
            <div class="ad_under_line"></div>
            <!--Contact-->
            <!--Social-->
            <div class="social_container">
                <ul>
                    <li><a href="#"><abbr title="Facebook"><i class="fab fa-facebook-f"></i></abbr></a></li>
                    <li><a href="#"><abbr title="Instagram"><i class="fab fa-instagram"></i></abbr></a></li>
                    <li><a href="#"><abbr title="Twitter"><i class="fab fa-twitter"></i></abbr></a></li>
                    <li><a href="#"><abbr title="WhatsApp"><i class="fab fa-whatsapp"></i></abbr></a></li>
                </ul>
            </div>
            <!--Social-->
        </div> 
        <!--Right Side of body-->
        <!--Responsive Tools-->
        <div class="social_container_for_mobile" id="res_mob">
            <div class="contact_section">
                <p>CONTACT US</p>
            </div>
            <div class="contant_item call">
                <img src="{{asset('img/e_meet/Call.png')}}" alt="Call">
                <p>+8801319714385</p>
            </div>
            <div class="contant_item message">
                <img src="{{asset('img/e_meet/Message.png')}}" alt="Mail">
                <p>enfomebd@gmail.com</p>
            </div>
            <ul>
                <li><a href="#"><abbr title="Facebook"><i class="fab fa-facebook-f"></i></abbr></a></li>
                <li><a href="#"><abbr title="Instagram"><i class="fab fa-instagram"></i></abbr></a></li>
                <li><a href="#"><abbr title="Twitter"><i class="fab fa-twitter"></i></abbr></a></li>
                <li><a href="#"><abbr title="WhatsApp"><i class="fab fa-whatsapp"></i></abbr></a></li>
            </ul>
        </div>
    </div>
@endsection