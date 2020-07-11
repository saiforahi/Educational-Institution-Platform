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
                    {{$details->name[0]}}
                </div>
                <div class="ins_name_con">
                    <div class="ins_full_name">
                        <h1>{{$details->name}}</h1>
                    </div>
                    <div class="subscribe_btn">
                        <form action="{{route('update_subscription')}}" method="POST">
                            @csrf
                            <input type="hidden" value="{{$details->id}}" name="institute_id">
                            <button type="submit" name="submit" value="submit">{{Auth::user()->isSubscribed($details->id)}}</button>
                        </form>
                    </div>
                </div>
            </div>
            @foreach ($details->notifications as $notification )
            <a href="{{url('notification/details/'.$notification->id)}}">
                <div class="noti_container">
                    <div class="notification_name">
                        Notification
                    </div>
                    <div class="date_con">
                        2020/06/24
                    </div>
                </div>
            </a>
            @endforeach
        </div>
        @include('layouts.body_right')

</div>
@endsection

        