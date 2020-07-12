@extends('layouts.app')
@section('content')
    @include('layouts.header')
    <!--Body-->
    <div class="body_container">
        <!--Responsive Tools-->
        <div id="body_container"></div>
        <!--Left Side of Body-->
        @include('layouts.body_left')
        <!--Left Side of Body-->

        <!--Center of body-->
        <div class="center_feed" id="bg_one">
            <div class="all_elm_flex">
                <div class="btn_con_of_pages">
                    <a href="#" id="btn_for_pages" target="_blank">About Us</a>
                </div>
                <div class="btn_con_of_pages">
                    <a href="#" id="btn_for_pages" target="_blank">Vision</a>
                </div>
                <div class="btn_con_of_pages">
                    <a href="#" id="btn_for_pages" target="_blank">Mission</a>
                </div>
                <div class="btn_con_of_pages">
                    <a href="#" id="btn_for_pages" target="_blank">Goals</a>
                </div>
                <div class="btn_con_of_pages">
                    <a href="#" id="btn_for_pages" target="_blank">Values</a>
                </div>
                <div class="btn_con_of_pages">
                    <a href="#" id="btn_for_pages" target="_blank">Objectives</a>
                </div>
                <div class="btn_con_of_pages">
                    <a href="#" id="btn_for_pages" target="_blank">Our Motto</a>
                </div>
                <div class="btn_con_of_pages">
                    <a href="#" id="btn_for_pages" target="_blank">Rate Us</a>
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
