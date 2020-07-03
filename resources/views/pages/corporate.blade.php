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
            <a href="{{route('single_institute')}}">
            <div class="ins_container">
                <div class="ins_logo_container">A</div>
                <div class="ins_name_container">AUST</div>
            </div>
            </a>
        </div>
        @include('layouts.body_right')
        
</div>
@endsection