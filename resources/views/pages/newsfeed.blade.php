@extends('layouts.main')
@section('content')
<div class="newsfeed_container">
    <div class="center_newsfeed" id="newsfeed_body">
        @if(Auth::user()->admin)
            <create-news-component @news_created="update_news_list"></create-news-component>
        @endif
        <show-news-component :news_list="newsData"></show-news-component>
    </div>
</div>
@endsection