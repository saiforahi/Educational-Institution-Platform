@extends('layouts.main')
@section('content')
    <div class="institute_list_container">
        <div class="center_institute_list">
            <div class="institute_list_column">
                <a href="{{url('institute/list/university')}}">
                    <div class="institute_list_row">
                        <h1>Univercity</h1>
                    </div>
                </a>
                <a href="{{url('institute/list/school')}}">
                    <div class="institute_list_row">
                        <h1>School</h1>
                    </div>
                </a>
            </div>
            <div class="institute_list_column">
                <a href="{{url('institute/list/college')}}">
                    <div class="institute_list_row">
                        <h1>College</h1>
                    </div>
                </a>
                <a href="{{url('institute/list/private')}}">
                    <div class="institute_list_row">
                        <h1>Private Institute</h1>
                    </div>
                </a>
            </div>
            <div class="institute_list_column">
                <a href="{{url('institute/list/diploma')}}">
                    <div class="institute_list_row">
                        <h1>Diploma</h1>
                    </div>
                </a>
                <a href="{{url('institute/list/national')}}">
                    <div class="institute_list_row">
                        <h1>National Univercity</h1>
                    </div>
                </a>
            </div>
            <div class="institute_list_column">
                <a href="{{url('institute/list/govt')}}">
                    <div class="institute_list_row">
                        <h1>Government Office</h1>
                    </div>
                </a>
                <a href="{{url('institute/list/corporate')}}">
                    <div class="institute_list_row">
                        <h1>Corporate Office</h1>
                    </div>
                </a>
            </div>
        </div>
    </div>
@endsection