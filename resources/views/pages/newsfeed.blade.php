@extends('layouts.temp')
@section('content')
    @include('layouts.header')
    <!--Body-->
    <div class="body_container">
        <!--Responsive Tools-->
        <div id="body_container"></div>
        @include('layouts.body_left')
        <!--Center of body-->
        <div class="news_center_feed" id="bg_one">
            @foreach ($news as $singleNews) 
            <div class="news_container">
                <div class="flex_container">
                    <div class="img_container">
                        <a href="#"><img src="{{ url('storage/news_image/'.$singleNews->image) }}" alt="NewsThumb"></a>
                    </div>
                    <div class="text_container">
                        <div class="header_text">
                            <a href="#" >{{$singleNews->title}}</a>
                        </div>
                        <div id="newsContent" class="headline_text">
                        <p id="{{'newsBody'.$singleNews->id}}">{{substr($singleNews->body,0,500)}}</p><a onclick="document.getElementById({{'newsBody'.$singleNews->id}}).innerHTML='{{$singleNews->body}};'" href="#">[Read more...]</a>
                        </div>
                        <div class="news_date">
                            <a href="#">www.website.com</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <!--Center of body-->

        @include('layouts.body_right')
    </div>
@endsection