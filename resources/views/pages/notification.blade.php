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
        <!--Form body-->
        <div class="institute_pages_center_feed" id="bg_one">
            <div class="notification_heading">
                <h1>{{$details->title}}</h1>
            </div>
            <div class="notification_content">
                <div class="notification_text">{{$details->body}}</div>
                <div class="notification_image">
                    <img src="{{asset('img/e_meet/3.png')}}" alt="Size">
                </div>
                <div class="notification_text">{{$details->body}}</div>
                <div class="notification_text">{{$details->body}}</div>
            </div>
        </div>
        @include('layouts.body_right')

</div>
@endsection

        