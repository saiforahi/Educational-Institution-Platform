<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EnfoMe || Career</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!--Font Awesome-->
    <script src="https://kit.fontawesome.com/f8aa4258e3.js" crossorigin="anonymous"></script>
    <!--Favicon and Stylesheet-->
    <link rel="icon" href="{{asset('img/frontend/enfologo.png')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/career/style.css')}}">
    <script src="{{asset('js/app.js')}}" defer></script>
    <script src="{{asset('js/careerVue.js')}}" defer></script>
</head>
<body>
    
    <div id="app" class="career_main_container">
        <job-list :jobs="{{$jobs}}"></job-list>
        <div id="job_application" class="career_form_container">
            <job-application :jobs="{{$jobs}}" ></job-application>
        </div>
    </div>

    <div class="temp">
        <h1>Please use your desktop to browse this page</h1>
    </div>
    <script src="{{asset('js/career/script.js')}}" defer></script>
</body>
</html>