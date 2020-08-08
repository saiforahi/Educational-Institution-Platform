@extends('layouts.temp')
@section('content')
    @include('layouts.header')
    <div class="main_body_container">
        @include('layouts.body_left')
        <!--Body Center Side-->
        <div class="n_center_body" id="newsfeed_body">
            <div class="newsfeed_container">
                @if(Auth::user()->admin)
                <create-news-component @news_created="update_news_list"></create-news-component>
                @endif
                <show-news-component :news_list="newsData"></show-news-component>
            </div>
        </div>
        <!--Body Center Side-->
        @include('layouts.body_right')
    </div>
@endsection