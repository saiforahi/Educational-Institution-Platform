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
                    <a href="{{route('show_universities')}}"> <img src="{{asset('img/e_meet/UNIVERSITY.png')}}" alt="University"> </a>
                </div>
                <div class="image_container">
                    <a href="{{route('college')}}"> <img src="{{asset('img/e_meet/COLLEGE.png')}}" alt="College"> </a>
                </div>
                <div class="image_container">
                    <a href="{{route('school')}}"> <img src="{{asset('img/e_meet/SCHOOL.png')}}" alt="School"> </a>
                </div>
                <div class="image_container">
                    <a href="{{route('private')}}"> <img src="{{asset('img/e_meet/PRIVATE.png')}}" alt="Private"> </a>
                </div>
                <div class="image_container">
                    <a href="{{route('diploma')}}"> <img src="{{asset('img/e_meet/DIPLOMA.png')}}" alt="Diploma"> </a>
                </div>
                <div class="image_container">
                    <a href="{{route('national')}}"> <img src="{{asset('img/e_meet/NATIONAL.png')}}" alt="National"> </a>
                </div>
                <div class="image_container">
                    <a href="{{route('govt')}}"> <img src="{{asset('img/e_meet/GOVT.png')}}" alt="GOVT"> </a>
                </div>
                <div class="image_container">
                    <a href="{{route('corporate')}}"> <img src="{{asset('img/e_meet/CORP.png')}}" alt="CORP"> </a>
                </div>
            </div>
        </div>
        @include('layouts.body_right')
    </div>
@endsection