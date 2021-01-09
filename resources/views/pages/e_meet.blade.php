@extends('layouts.main')
@section('content')
<div class="section_center">
    <div class="e-meet_container">
        <div class="e-meet_form_container">
            <div class="start_new">
                <div class="meet_joining_info">
                    <p>Start a new meeting with this ID</p>
                </div>
                <div class="form">
                    <input type="text" placeholder="Meeting Id goes here" id="roomName" value="EnfoMe" readonly>
                    <div class="form_btn">
                        <div class="sharing">
                            <button class="button_45">
                                <abbr title="Share">
                                    <i class="fas fa-share-alt" aria-hidden="true"></i>
                                </abbr>
                            </button>
                            <button class="button_45">
                                <abbr title="Copy">
                                    <i class="far fa-copy" aria-hidden="true"></i>
                                </abbr>
                            </button>
                        </div>
                        <div class="start">
                            <button type="button" onclick="startMeeting()">Start Meeting</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="join_meet">
                <div class="meet_joining_info">
                    <p>Join a new meeting enter the new
                        meeting ID below</p>
                </div>
                <div class="form">
                    <input type="text" placeholder="Enter Meeting ID" id="meetingID">
                    <button type="button" onclick="joinMeeting()">Join Meeting</button>
                </div>
            </div>
        </div>
    </div>
    <div id="meeting"></div>
</div>
@endsection
@section('js-part')
<script src='https://vps-83c84ae2.vps.ovh.ca/external_api.js'></script>
<script>
    function joinMeeting(){
        var roomName=document.getElementById('meetingID').value;
        window.location.href = 'https://vps-83c84ae2.vps.ovh.ca/'+roomName;
    }
    function startMeeting(){
        //document.getElementsByClassName('body_area')[0].style.display='none';
        const domain = 'vps-83c84ae2.vps.ovh.ca';
        const options = {
            roomName: document.getElementById("roomName").value,
            //height: document.getElementById("bg_one").getBoundingClientRect().height,
            //width: document.getElementById("bg_one").getBoundingClientRect().width,
            height: 400,
            width: 700,
            userInfo: {
                email: window.user.email,
                displayName: window.user.name                
            },
            audioInput: '<deviceLabel>',
            audioOutput: '<deviceLabel>',
            videoInput: '<deviceLabel>',
            parentNode: document.getElementById("meeting"),
            configOverwrite: { startWithAudioMuted: true },
        }
        window.api = new JitsiMeetExternalAPI(domain, options);
        window.api.addEventListener('readyToClose', function(){
            window.api.dispose();
            //document.getElementsByClassName('body_area')[0].style.display='block';
        });
    }
</script>
@endsection
