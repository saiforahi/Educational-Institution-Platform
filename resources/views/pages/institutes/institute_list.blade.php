@extends('layouts.main')
@section('content')
    <div class="institute_list_inner_container">
        <div class="institute_list_inner_center">
            <div class="institute_list_inner_header">
                <h1>{{ucfirst($type)}}</h1>
            </div>
            @foreach ($institutes as $institute)
            <div class="institute_list_serial">
                <div class="institute_list_logo">
                    <h1>{{$institute->name[0]}}</h1>
                </div>
                <div class="institute_list_name">
                    <a href="{{ url('institute/details/'.$institute->id)}}"><h1>{{$institute->name}}</h1></a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection

        