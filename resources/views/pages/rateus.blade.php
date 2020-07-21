@extends('layouts.temp')
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

        @include('layouts.body_right')
    </div>
@endsection
