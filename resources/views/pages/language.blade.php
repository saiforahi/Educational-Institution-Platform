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
            <div class="making_flex">
                <div class="bangla">
                    <button id="ban">Bangla</button>
                </div>
                <div class="english">
                    <button id="en">English</button>
                </div>
            </div>
        </div>
        <!--Center of body-->

        @include('layouts.body_right')
    </div>
@endsection