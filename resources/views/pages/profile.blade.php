@extends('layouts.temp')
@section('content')
    @include('layouts.header')
    <!--Body-->
    <div class="body_container">
        <!--Responsive Tools-->
        <div id="body_container"></div>
        @include('layouts.body_left')

        <!--Center of body-->
        <!--Form body-->
        <div class="center_feed" id="bg_one">
            <div class="profile_edit_container">
                <div class="profile_edit_img">
                    <img src="{{asset('img/male-user.svg')}}" alt="Profile Picture">
                </div>
                <div class="profile_edit_main">
                    <form action="#" name="edit_profile_name">
                        @csrf
                        <div class="edit_name">
                            <input id="name" type="text" placeholder="{{Auth::user()->name}}" readonly autocomplete="off" name="name">
                        </div>
                        <div class="edit_email">
                            <input type="email" placeholder="{{Auth::user()->email}}" readonly autocomplete="off" name="email">
                        </div>
                        <div class="edit_number">
                            <input type="tel" placeholder="{{Auth::user()->phone}}" readonly autocomplete="off" name="phone">
                        </div>
                        <!--div class="edit_password">
                            <input type="password" value="123456" readonly autocomplete="off" name="edit_password">
                        </div-->
                        <div class="edit_profile_btn" id="edit_profile_btn">
                            <button  name="submit" id="edit_btn" onclick="edit_button_action()" >Edit</button>
                        </div>
                        <div class="update_profile_btn" id="update_profile_btn">
                            <button type="submit" value="submit" id="update_btn">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!--Center of body-->
        @include('layouts.body_right')
    </div>
@endsection
@section('js-part')
    <script>
        function edit_button_action(){
            if(document.getElementById('edit_btn').innerHTML=='Edit'){
                document.getElementById('edit_btn').innerHTML='Cancel';
                document.getElementById('name').readOnly=false;
                document.getElementById('email').readOnly=false;
                document.getElementById('phone').readOnly=false;
            }else{
                document.getElementById('edit_btn').innerHTML='Edit';
                document.getElementById('name').readOnly=true;
                document.getElementById('email').readOnly=true;
                document.getElementById('phone').readOnly=true;
            }
        }
    </script>
@endsection