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
        <!--Form body-->
        <div class="institute_pages_center_feed" id="bg_one">
            <div class="ins_detail_container">
                <div class="ins_profile_img_con">
                    A
                </div>
                <div class="ins_name_con">
                    <div class="ins_full_name">
                        <h1>AUST</h1>
                    </div>
                    <div class="subscribe_btn">
                        <button>Subscribe</button>
                    </div>
                </div>
            </div>
            <a href="{{route('notification')}}">
            <div class="noti_container">
                <div class="notification_name">
                    Notification
                </div>
                <div class="date_con">
                    2020/06/24
                </div>
            </div>
            </a>
            
        </div>
        @include('layouts.body_right')

</div>
@endsection

        