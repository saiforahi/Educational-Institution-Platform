@extends('layouts.main')
@section('content')
<div class="institute_page_container">
    <div class="institute_page_center">
        <!-- Institute Detais -->
        <div class="institute_page_ins_details">
            <div class="institute_page_ins_details_logo">
                <h1>{{$details->name[0]}}</h1>
            </div>
            <div class="institute_page_ins_details_name">
                <h1>{{$details->name}}</h1>
            </div>
            <div class="institute_page_ins_details_subscribe">
                <form id="subscription_form" action="{{route('update_subscription')}}" method="POST">
                    @csrf
                    <input type="hidden" value="{{$details->id}}" name="institute_id">
                    <p onclick="document.getElementById('subscription_form').submit()">{{Auth::user()->isSubscribed($details->id)}}</p>
                </form>
            </div>
        </div>
        <!-- Institute Detais -->
        <!-- Recent News Header -->
        <div class="institute_page_recent_news_header">
            <h1>Recent News from <span id="institute_name">{{$details->name}}</span></h1>
        </div>
        <!-- Recent News Header -->
        <!-- Recent News -->
        @foreach ( App\News::where('institute_id',$details->id)->orderBy('created_at','desc')->get() as $newsItem)
        <div class="institute_page_recent_news">
            <div class="post_image_container">
                <div class="ratio_setup">
                    <img src="https://cdn.pixabay.com/photo/2020/10/28/11/08/castle-5693094__340.jpg" alt="">
                </div>
            </div>
            <div class="post_title_description_container">
                <div class="title_container">
                    <h3>{{$newsItem->title}} <a href="#">[......]</a></h3>
                </div>
                <div class="description_container">
                    <p>when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries <a href="#">Read More...</a></p>
                </div>
            </div>
        </div>
        @endforeach
        
        <!-- Recent News -->
    </div>
</div>
@endsection

        