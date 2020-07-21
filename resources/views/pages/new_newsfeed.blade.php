@extends('layouts.temp')
@section('content')
    @include('layouts.header')
    <div class="main_body_container">
        @include('layouts.body_left')
        <!--Body Center Side-->
        <div class="n_center_body" id="newsfeed_body">
            <div class="newsfeed_container">
                <create-news-component></create-news-component>

                <!--News-->
                <div class="n_news_container">
                    <div class="n_header">
                    <div class="institute_name_con">
                        <div class="institute_icon">
                            <h3>E</h3>
                        </div>
                        <div class="institute_name">
                            <p>EnfoMe</p>
                        </div>
                    </div>
                    </div>
                    <div class="n_headline_con">
                        <!--If letter is more than 300 Read More will appear-->
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. <a href="#">[Read more]</a> </p>
                    </div>
                    <div class="n_image_con">
                        <a>
                        <img src="https://images.pexels.com/photos/1680140/pexels-photo-1680140.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="">
                        </a>
                    </div>
                    <div class="n_newsline_con">
                        <!--If letter is more than 600 Read More will appear-->
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. PageMaker including versi <a href="#">[Read More]</a></p>
                    </div>
                </div>
                <!--News-->
            </div>
        </div>
        <!--Body Center Side-->
        @include('layouts.body_right')
    </div>
@endsection