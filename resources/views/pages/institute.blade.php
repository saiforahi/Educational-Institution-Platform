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
        <div class="institute_center_feed" id="bg_one">
            <div class="main_icon_container">
                <div class="image_container">
                    <a href="{{url('institute/list/university')}}"> <img src="{{asset('img/e_meet/UNIVERSITY.png')}}" alt="University"> </a>
                </div>
                <div class="image_container">
                    <a href="{{url('institute/list/college')}}"> <img src="{{asset('img/e_meet/COLLEGE.png')}}" alt="College"> </a>
                </div>
                <div class="image_container">
                    <a href="{{url('institute/list/school')}}"> <img src="{{asset('img/e_meet/SCHOOL.png')}}" alt="School"> </a>
                </div>
                <div class="image_container">
                    <a href="{{url('institute/list/private')}}"> <img src="{{asset('img/e_meet/PRIVATE.png')}}" alt="Private"> </a>
                </div>
                <div class="image_container">
                    <a href="{{url('institute/list/diploma')}}"> <img src="{{asset('img/e_meet/DIPLOMA.png')}}" alt="Diploma"> </a>
                </div>
                <div class="image_container">
                    <a href="{{url('institute/list/national')}}"> <img src="{{asset('img/e_meet/NATIONAL.png')}}" alt="National"> </a>
                </div>
                <div class="image_container">
                    <a href="{{url('institute/list/govt')}}"> <img src="{{asset('img/e_meet/GOVT.png')}}" alt="GOVT"> </a>
                </div>
                <div class="image_container">
                    <a href="{{url('institute/list/corporate')}}"> <img src="{{asset('img/e_meet/CORP.png')}}" alt="CORP"> </a>
                </div>
            </div>
        </div>
        @include('layouts.body_right')
    </div>
@endsection