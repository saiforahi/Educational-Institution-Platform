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
            
            <div id="center_div" class="emeet_btn_container">
                <div class="btn_start_new">
                    <div class="input_start_new">
                        <div>
                            <p>Start a new meeting with this ID</p>
                            <input id="roomName" value="{{Auth::user()->name.'room'}}" type="text">
                        </div>
                        <div class="action_container">
                            <div>
                                <abbr title="Share"><button id="btn_share"><i class="fas fa-share-alt"></i></button></abbr>
                                <abbr title="Copy"><button id="btn_copy"><i class="far fa-copy"></i></button></abbr>
                            </div>
                            <div>
                                <button id="btn_start" onclick="startMeeting()">START NEW</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="btn_join_meet">
                    <div>
                        <p>Join a new meeting enter the new <br> meeting ID below</p>
                        <input id="meetingID" type="text">
                    </div>
                    <div>
                        <button onclick="joinMeeting()" id="btn_join">JOIN MEETING</button>
                    </div>                  
                </div>
            </div>
            <div id="meeting" ></div>
        </div>
        <!--Center of body-->

        <!--Right Side of body-->
        @include('layouts.body_right')
        <!--Right Side of body-->
    
    </div>
    </div>
@endsection

@section('js-part')
<script>
    console.log(window.user)
</script>


@endsection
