<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="icon" href="./img/enfologo.png"> -->
    @if(Route::current()->getName()=='login')
        <link rel="stylesheet" href="{{asset('css/login/style.css')}}">
        <title>{{config('app.name', 'Laravel')}} || Login</title>
    @endif
</head>
<body>
    <div class="main_container">
        <div class="flex_container">
            <div class="header">
                <div class="logo_con">
                    <img src="{{asset('img/EnfoMeLogo.png')}}" alt="EnfoMe Logo">
                </div>
            </div>
            <div class="svg">
                <div class="head"></div>
                <div class="body"></div>
            </div>
            <div class="form">
                @if ($errors->any())
                    <div class="alert">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="{{route('login')}}" method="POST" id="form">
                    @csrf
                    <input type="email" name="email" id="email" placeholder="E-mail" class="linput">
                    <small id="errorE">Err</small>
                    <input type="password" name="password" id="pass" placeholder="Password" class="linput">
                    <small id="errorP">Err</small>
    
                    <div class="rem_me_res">
                        <input type="checkbox" id="cb5">
                        <label for="cb5" class="recheck">
                            <div class="tick_con tick_con5">
                                <div class="tick"></div>
                            </div>
                        </label>
                        <p>Remember me</p>
                    </div>
    
                    <div class="cb1_con cbx_con">
                        <div class="rem_me">
                            <input type="checkbox" id="cb4">
                            <label for="cb4" class="recheck">
                                <div class="tick_con tick_con4">
                                    <div class="tick"></div>
                                </div>
                            </label>
                            <p>Remember me</p>
                        </div>
                    </div>
                    <small id="errorC">Err</small>
                    <button type="submit">Log In</button>
                </form>
            </div>
            <div class="form_footer">
                <p>Forget password ? <a href="#">Recover password</a></p>
                <p>Don't have an account ? <a href="{{route('register')}}">Sign Up</a></p>
            </div>
        </div>
    </div>

    <script src="{{asset('js/login/scrpt.js')}}"></script>
</body>
</html>