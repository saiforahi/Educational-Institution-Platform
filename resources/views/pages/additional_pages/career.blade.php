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
    <link rel="stylesheet" href="{{asset('css/career/style.css')}}">


</head>
<body>
    <div class="career_main_container">
        <div class="career_details_container">
            <div class="career_slider">
                @foreach ($jobs as $job)
                <div class="career_slide">
                    <div class="career_slide_header">
                        <p>{{$job->title}}</p>
                    </div>
                    <div class="career_slide_body">
                        <p>{{$job->description}}</p>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="career_slide_next">
                <i class="fas fa-arrow-right"></i>
            </div>
            <div class="career_slide_prev">
                <i class="fas fa-arrow-left"></i>
            </div>
        </div>
        <div>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{route('submit_job_application')}}" method="post">
                @csrf
                <select name="job">
                    <option value="1">UI</option>
                    <option value="2">Flutter</option>
                </select>
                <input type="text" name="first_name" placeholder="Enter your first name" value="{{ old('lastName') }}">
                <input type="text" name="last_name" placeholder="Enter your last name">
                <input type="email" name="email" placeholder="Enter your email">
                <input type="text" name="phone" placeholder="Enter your phone">
                <input type="date" name="date" placeholder="Enter interview date">
                <input type="time" name="time" placeholder="Enter interview time">
                <div class="file_upload">
                    <input type="file">
                </div>
                <button type="submit">Submit</button>
            </form>
        </div>
        <div class="career_form_container">
            <div class="career_form_slider">
                <div class="career_form_slide">
                    <form action="#" method="post">
                        @csrf
                        <select>
                            <option value="1">UI</option>
                            <option value="2">Flutter</option>
                        </select>
                        <input type="text" name="first_name" placeholder="Enter your first name">
                        <input type="text" name="last_name" placeholder="Enter your last name">
                        <input type="email" name="email" placeholder="Enter your email">
                        <input type="text" name="phone" placeholder="Enter your phone">
                        <input type="date" name="date" placeholder="Enter interview date">
                        <input type="time" name="time" placeholder="Enter interview time">
                        <div class="file_upload">
                            <input type="file">
                        </div>
                        <button>Submit</button>
                    </form>
                </div>
                {{-- <div class="career_form_slide">
                    <form action="#" method="post">
                        <input type="text" placeholder="Enter your full name">
                        <input type="text" placeholder="Tell us about UI">
                        <div class="file_upload">
                            <input type="file">
                        </div>
                        <button>Submit</button>
                    </form>
                </div> --}}
            </div>
        </div>
    </div>

    <div class="temp">
        <h1>Please use your desktop to browse this page</h1>
    </div>

    <script src="{{asset('js/career/script.js')}}"></script>
</body>
</html>