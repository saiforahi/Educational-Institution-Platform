<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Enfome || Survey</title>
    <!-- Favicons-->
    <link rel="shortcut icon" href="{{asset('img/logo.png')}}" type="image/x-icon">
    <!-- GOOGLE WEB FONT -->
    <link href="https://fonts.googleapis.com/css?family=Caveat%7CPoppins:300,400,500,600,700&amp;display=swap" rel="stylesheet">
    <!-- BASE CSS -->
    <link href="{{asset('css/survey/css-bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/survey/css-style.css')}}" rel="stylesheet">
    <link href="{{asset('css/survey/css-vendors.css')}}" rel="stylesheet">
    <!-- YOUR CUSTOM CSS -->
    <link href="{{asset('css/css-custom.css')}}" rel="stylesheet">
</head>

<body class="style_2">

    <div id="preloader">
        <div data-loader="circle-side"></div>
    </div>
    <!-- /Preload -->

    <div id="loader_form">
        <div data-loader="circle-side-2"></div>
    </div>
    <!-- /loader_form -->

    <header>
        <div class="container-fluid">
            <div class="row">
                <div class="col-5">
                    <a href="{{route('home')}}"><img src="{{asset('img/enfologo.png')}}" alt="" width="50" height="55"></a>
                </div>
                <div class="col-7">
                    <div id="social">
                        <ul>
                            <li><a href="#"><i class="fab fa-apple"></i></a></li>
                            <li><a href="#0"><i class="social_facebook"></i></a></li>
                            <li><a href="#0"><i class="social_twitter"></i></a></li>
                            <li><a href="#0"><i class="social_linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </header>
    <!-- /header -->
    <div class="wrapper_centering">
        <div class="container_centering">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-xl-6 col-lg-6 d-flex align-items-center">
                        <div class="main_title_1">
                            <h3><img src="{{asset('img/img-main_icon_1.svg')}}" width="80" height="80" alt="">Survey</h3>
                            <p>করোনাকালে স্কুল, শিক্ষক, শিক্ষার্থী ও অভিভাবকদের সাথে যোগাযোগের সবচেয়ে সহজ উপায় তথ্য প্রযুক্তি। আমরা স্কুলগুলোকে প্রযুক্তিগত সহায়তা দিতে বদ্ধ পরিকর যাতে তারা তথ্য ও যোগাযোগ ব্যবস্থাপনায় আমূল উন্নয়ন সাধন করে ছাত্রদের সাথে যোগাযোগ
                                ও শিক্ষা-কার্যক্রম নিরবিচ্ছন্নভাবে চালিয়ে যেতে পারে। সাথে সাথে শিক্ষার্থী, শিক্ষক ও কর্মচারীদের তথ্য ব্যবস্থাপনায় ডিজিটাল সিষ্টেম প্রয়োগ করে স্কুলগুলো নিজেদের আরো সমৃদ্ধ, নির্ভরযোগ্য, উদ্বেগমুক্ত, ও সাসটেইনেবল করে তুলতে
                                পারে যা অভিভাবক এবং সমাজের কাছে তাদের ভাবমূর্তি আরো উজ্জ্বল করবে। আর এজন্য স্কুল সম্পর্কিত কিছু তথ্য আমাদের জানা দরকার। </p>
                            <p><em>- Enfome Team</em></p>
                        </div>
                    </div>
                    <!-- /col -->
                    <div class="col-xl-5 col-lg-5">
                        <div id="wizard_container">
                            <div id="top-wizard">
                                <div id="progressbar"></div>
                            </div>
                            <!-- /top-wizard -->
                            <form id="wrapped" action="{{route('save_survey')}}" method="POST" autocomplete="off">
                                @csrf
                                <input id="website" name="website" type="text" value="">
                                <!-- Leave for security protection, read docs for details -->
                                <div id="middle-wizard">

                                    <div class="step">
                                        <h3 class="main_question"><strong>1 of 19</strong>স্কুলের ধরন:</h3>
                                        <div class="review_block">
                                            <ul>
                                                <li>
                                                    <div class="checkbox_radio_container">
                                                        <input type="radio" id="no" name="question_1" class="required" value="No" onchange="getVals(this, 'question_1');"><label class="radio" for="no"></label>
                                                        <label for="no" class="wrapper">সহশিক্ষা হাইস্কুল </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="checkbox_radio_container">
                                                        <input type="radio" id="maybe" name="question_1" class="required" value="Maybe" onchange="getVals(this, 'question_1');"><label class="radio" for="maybe"></label>
                                                        <label for="maybe" class="wrapper">সহশিক্ষা কলেজ </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="checkbox_radio_container">
                                                        <input type="radio" id="probably" name="question_1" class="required" value="Probably" onchange="getVals(this, 'question_1');"><label class="radio" for="probably"></label>
                                                        <label for="probably" class="wrapper">বালিকা হাইস্কুল </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="checkbox_radio_container">
                                                        <input type="radio" id="sure" name="question_1" class="required" value="Sure" onchange="getVals(this, 'question_1');"><label class="radio" for="sure"></label>
                                                        <label for="sure" class="wrapper">বালক হাইস্কুল </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="checkbox_radio_container">
                                                        <input type="radio" id="not_sure" name="question_1" class="required" value="Not_Sure" onchange="getVals(this, 'question_1');"><label class="radio" for="not_sure"></label>
                                                        <label for="not_sure" class="wrapper">স্কুল এন্ড কলেজ </label>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- /review_block-->
                                        <div class="form-group">
                                            <label for="additional_message_1_label">Leave your message</label>
                                            <textarea name="additional_message_1" id="additional_message_1_label" class="form-control" style="height:120px;" onkeyup="getVals(this, 'additional_message_1');"></textarea></div>
                                    </div>
                                    <!-- /step 1-->

                                    <div class="step">
                                        <h3 class="main_question mb-4"><strong>2 of 19</strong>স্কুলের কার্যক্রম কাল:</h3>
                                        <div class="review_block">
                                            <ul>
                                                <li>
                                                    <div class="checkbox_radio_container">
                                                        <input type="radio" id="no_1" name="question_2" class="required" value="No_1" onchange="getVals(this, 'question_2');"><label class="radio" for="no_1"></label>
                                                        <label for="no_1" class="wrapper">অনধিক পাঁচ বছর </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="checkbox_radio_container">
                                                        <input type="radio" id="maybe_1" name="question_2" class="required" value="Maybe_1" onchange="getVals(this, 'question_2');"><label class="radio" for="maybe_1"></label>
                                                        <label for="maybe_1" class="wrapper">অনধিক দশ বছর </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="checkbox_radio_container">
                                                        <input type="radio" id="probably_1" name="question_2" class="required" value="Probably_1" onchange="getVals(this, 'question_2');"><label class="radio" for="probably_1"></label>
                                                        <label for="probably_1" class="wrapper">অনধিক পনের বছর </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="checkbox_radio_container">
                                                        <input type="radio" id="sure_1" name="question_2" class="required" value="Sure_1" onchange="getVals(this, 'question_2');"><label class="radio" for="sure_1"></label>
                                                        <label for="sure_1" class="wrapper">অনধিক বিশ বছর </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="checkbox_radio_container">
                                                        <input type="radio" id="not_sure_1" name="question_2" class="required" value="Not_Sure_1" onchange="getVals(this, 'question_2');"><label class="radio" for="not_sure_1"></label>
                                                        <label for="not_sure_1" class="wrapper">স্কুল এন্ড কলেজ </label>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- /review_block-->
                                        <div class="form-group">
                                            <label for="additional_message_2_label">Leave your message</label>
                                            <textarea name="additional_message_2" id="additional_message_2_label" class="form-control" style="height:120px;" onkeyup="getVals(this, 'additional_message_2');"></textarea></div>
                                    </div>

                                    <!-- /step 2-->
                                    <div class="step">
                                        <h3 class="main_question mb-4"><strong>3 of 19</strong>ছাত্র-ছাত্রীর সংখ্যা:</h3>
                                        <div class="review_block">
                                            <ul>
                                                <li>
                                                    <div class="checkbox_radio_container">
                                                        <input type="radio" id="no_2" name="question_3" class="required" value="No_2" onchange="getVals(this, 'question_3');"><label class="radio" for="no_2"></label>
                                                        <label for="no_2" class="wrapper">অনধিক ২০০ </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="checkbox_radio_container">
                                                        <input type="radio" id="maybe_2" name="question_3" class="required" value="Maybe_2" onchange="getVals(this, 'question_3');"><label class="radio" for="maybe_2"></label>
                                                        <label for="maybe_2" class="wrapper">অনধিক ৫০০ </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="checkbox_radio_container">
                                                        <input type="radio" id="probably_2" name="question_3" class="required" value="Probably_2" onchange="getVals(this, 'question_3');"><label class="radio" for="probably_2"></label>
                                                        <label for="probably_2" class="wrapper">অনধিক ১০০০ </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="checkbox_radio_container">
                                                        <input type="radio" id="sure_2" name="question_3" class="required" value="Sure_2" onchange="getVals(this, 'question_3');"><label class="radio" for="sure_2"></label>
                                                        <label for="sure_2" class="wrapper">অনধিক ২০০০ </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="checkbox_radio_container">
                                                        <input type="radio" id="not_sure_2" name="question_3" class="required" value="Not_Sure_2" onchange="getVals(this, 'question_3');"><label class="radio" for="not_sure_2"></label>
                                                        <label for="not_sure_2" class="wrapper">অনধিক ৫০০০ </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="checkbox_radio_container">
                                                        <input type="radio" id="not_sure2" name="question_3" class="required" value="Not_Sure2" onchange="getVals(this, 'question_3');"><label class="radio" for="not_sure2"></label>
                                                        <label for="not_sure2" class="wrapper">৫০০০+ </label>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- /review_block-->
                                        <div class="form-group">
                                            <label for="additional_message_3_label">Leave your message</label>
                                            <textarea name="additional_message_3" id="additional_message_3_label" class="form-control" style="height:120px;" onkeyup="getVals(this, 'additional_message_3');"></textarea></div>
                                    </div>

                                    <!-- /step 3-->
                                    <div class="step">
                                        <h3 class="main_question mb-4"><strong>4 of 19</strong>শিক্ষকের সংখ্যা:</h3>
                                        <div class="review_block">
                                            <ul>
                                                <li>
                                                    <div class="checkbox_radio_container">
                                                        <input type="radio" id="no_3" name="question_4" class="required" value="No_3" onchange="getVals(this, 'question_4');"><label class="radio" for="no_3"></label>
                                                        <label for="no_3" class="wrapper">অনধিক ৫০ </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="checkbox_radio_container">
                                                        <input type="radio" id="maybe_3" name="question_4" class="required" value="Maybe_3" onchange="getVals(this, 'question_4');"><label class="radio" for="maybe_3"></label>
                                                        <label for="maybe_3" class="wrapper">অনধিক ১০০ </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="checkbox_radio_container">
                                                        <input type="radio" id="probably_3" name="question_4" class="required" value="Probably_3" onchange="getVals(this, 'question_4');"><label class="radio" for="probably_3"></label>
                                                        <label for="probably_3" class="wrapper">অনধিক ২০০ </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="checkbox_radio_container">
                                                        <input type="radio" id="sure_3" name="question_4" class="required" value="Sure_3" onchange="getVals(this, 'question_4');"><label class="radio" for="sure_3"></label>
                                                        <label for="sure_3" class="wrapper">অনধিক ৫০০ </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="checkbox_radio_container">
                                                        <input type="radio" id="not_sure_3" name="question_4" class="required" value="Not_Sure_3" onchange="getVals(this, 'question_4');"><label class="radio" for="not_sure_3"></label>
                                                        <label for="not_sure_3" class="wrapper">৫০০+ </label>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- /review_block-->
                                        <div class="form-group">
                                            <label for="additional_message_4_label">Leave your message</label>
                                            <textarea name="additional_message_4" id="additional_message_4_label" class="form-control" style="height:120px;" onkeyup="getVals(this, 'additional_message_4');"></textarea></div>
                                    </div>
                                    <!-- /step 4-->
                                    <div class="step">
                                        <h3 class="main_question"><strong>5 of 19</strong>শিক্ষক, অভিভাবক ও শিক্ষার্থীদের সাধারন নোটিশ পাঠানেোর মাধ্যম - </h3>
                                        <div class="review_block">
                                            <ul>
                                                <li>
                                                    <div class="checkbox_radio_container">
                                                        <input type="radio" id="question_5_opt_1" name="question_5[]" class="required" value="website" onchange="getVals(this, 'question_5');">
                                                        <label class="radio" for="question_5_opt_1"></label>
                                                        <label for="question_5_opt_1" class="wrapper">স্কুল ওয়েবসাইট </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="checkbox_radio_container">
                                                        <input type="radio" id="question_5_opt_2" name="question_5[]" class="required" value="social_media" onchange="getVals(this, 'question_5');">
                                                        <label class="radio" for="question_5_opt_2"></label>
                                                        <label for="question_5_opt_2" class="wrapper">সোশাল মিডিয়া </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="checkbox_radio_container">
                                                        <input type="radio" id="question_5_opt_3" name="question_5[]" class="required" value="sms" onchange="getVals(this, 'question_5');">
                                                        <label class="radio" for="question_5_opt_3"></label>
                                                        <label for="question_5_opt_3" class="wrapper">এসএমএস </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="checkbox_radio_container">
                                                        <input type="radio" id="question_5_opt_4" name="question_5[]" class="required" value="phone_call" onchange="getVals(this, 'question_5');">
                                                        <label class="radio" for="question_5_opt_4"></label>
                                                        <label for="question_5_opt_4" class="wrapper">মোবাইল কল </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="checkbox_radio_container">
                                                        <input type="radio" id="question_5_opt_5" name="question_5[]" class="required" value="written_notice" onchange="getVals(this, 'question_5');">
                                                        <label class="radio" for="question_5_opt_5"></label>
                                                        <label for="question_5_opt_5" class="wrapper">কাগজের নোটিস </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="checkbox_radio_container">
                                                        <input type="radio" id="question_5_opt_6" name="question_5[]" class="required" value="notice_board" onchange="getVals(this, 'question_5');">
                                                        <label class="radio" for="question_5_opt_6"></label>
                                                        <label for="question_5_opt_6" class="wrapper">নোটিশ বোর্ড </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="checkbox_radio_container">
                                                        <input type="radio" id="question_5_opt_7" name="question_5[]" class="required" value="others" onchange="getVals(this, 'question_5');">
                                                        <label class="radio" for="question_5_opt_7"></label>
                                                        <label for="question_5_opt_7" class="wrapper">অন্যান্য </label>
                                                    </div>
                                                </li>
                                            </ul><small><em>Multiple selections *</em></small>
                                        </div>
                                    </div>
                                    <!-- /step 5-->
                                    <div class="step">
                                        <h3 class="main_question mb-4"><strong>6 of 19</strong>সাধারণ নোটিশ পাঠানোর ক্ষেত্রে বর্তমানে যে মাধ্যম/মাধ্যমগুলো ব্যবহার করছেন তা ব্যবহার করতে আপনার প্রতিষ্ঠানের প্রতিমাসে কত খরচ হয়?</h3>
                                        <div class="review_block">
                                            <ul>
                                                <li>
                                                    <div class="checkbox_radio_container">
                                                        <input type="radio" id="no_4" name="question_6" class="required" value="No_4" onchange="getVals(this, 'question_6');"><label class="radio" for="no_4"></label>
                                                        <label for="no_4" class="wrapper">মাসিক প্রায় ৫০০ </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="checkbox_radio_container">
                                                        <input type="radio" id="maybe_4" name="question_6" class="required" value="Maybe_4" onchange="getVals(this, 'question_6');"><label class="radio" for="maybe_4"></label>
                                                        <label for="maybe_4" class="wrapper">মাসিক প্রায় ১০০০ </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="checkbox_radio_container">
                                                        <input type="radio" id="probably_4" name="question_6" class="required" value="Probably_4" onchange="getVals(this, 'question_6');"><label class="radio" for="probably_4"></label>
                                                        <label for="probably_4" class="wrapper">মাসিক প্রায় ১৫০০ </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="checkbox_radio_container">
                                                        <input type="radio" id="sure_4" name="question_6" class="required" value="Sure_4" onchange="getVals(this, 'question_6');"><label class="radio" for="sure_4"></label>
                                                        <label for="sure_4" class="wrapper">মাসিক প্রায় ২০০০ </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="checkbox_radio_container">
                                                        <input type="radio" id="not_sure_4" name="question_6" class="required" value="Not_Sure_4" onchange="getVals(this, 'question_6');"><label class="radio" for="not_sure_4"></label>
                                                        <label for="not_sure_4" class="wrapper">২০০০+ </label>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- /review_block-->
                                        <div class="form-group">
                                            <label for="additional_message_6_label">Leave your message</label>
                                            <textarea name="additional_message_6" id="additional_message_6_label" class="form-control" style="height:120px;" onkeyup="getVals(this, 'additional_message_6');"></textarea></div>
                                    </div>
                                    <!-- /step 6-->
                                    <div class="step">
                                        <h3 class="main_question mb-4"><strong>7 of 19</strong>সাধারণ নোটিশ পাঠানোর ক্ষেত্রে বর্তমানে যে মাধ্যম/মাধ্যমগুলো ব্যবহার করছেন তা ব্যবহার করতে আপনার প্রতিষ্ঠানের প্রতিমাসে কত খরচ হয়?</h3>
                                        <div class="review_block">
                                            <ul>
                                                <li>
                                                    <div class="checkbox_radio_container">
                                                        <input type="radio" id="no_5" name="question_7" class="required" value="No_5" onchange="getVals(this, 'question_7');"><label class="radio" for="no_5"></label>
                                                        <label for="no_5" class="wrapper">০ - ২০ ভাগ </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="checkbox_radio_container">
                                                        <input type="radio" id="maybe_5" name="question_7" class="required" value="Maybe_5" onchange="getVals(this, 'question_7');"><label class="radio" for="maybe_5"></label>
                                                        <label for="maybe_5" class="wrapper">২০ - ৪০ ভাগ </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="checkbox_radio_container">
                                                        <input type="radio" id="probably_5" name="question_7" class="required" value="Probably_5" onchange="getVals(this, 'question_7');"><label class="radio" for="probably_5"></label>
                                                        <label for="probably_5" class="wrapper">৪০ - ৬০ ভাগ </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="checkbox_radio_container">
                                                        <input type="radio" id="sure_5" name="question_7" class="required" value="Sure_5" onchange="getVals(this, 'question_7');"><label class="radio" for="sure_5"></label>
                                                        <label for="sure_5" class="wrapper">৪০ - ৬০ ভাগ </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="checkbox_radio_container">
                                                        <input type="radio" id="not_sure_5" name="question_7" class="required" value="Not_Sure_5" onchange="getVals(this, 'question_7');"><label class="radio" for="not_sure_5"></label>
                                                        <label for="not_sure_5" class="wrapper">৮০ - ১০০ ভাগ </label>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- /review_block-->
                                        <div class="form-group">
                                            <label for="additional_message_7_label">Leave your message</label>
                                            <textarea name="additional_message_7" id="additional_message_7_label" class="form-control" style="height:120px;" onkeyup="getVals(this, 'additional_message_7');"></textarea></div>
                                    </div>

                                    <!-- /step 8(A)-->
                                    <div class="step">
                                        <h3 class="main_question mb-4"><strong>8(A) of 19</strong>বর্তমানে আপনি বার্তা পাঠানোর জন্য যে মাধ্যম/মাধ্যমগুলো ব্যবহার করছেন তা ব্যবহার করে আপনি কতটুকু সন্তুষ্ট? (A)ব্যবহার উপযোগিতা -</h3>
                                        <div class="review_block">
                                            <ul>
                                                <li>
                                                    <div class="checkbox_radio_container">
                                                        <input type="radio" id="no_6" name="question_8" class="required" value="No_6" onchange="getVals(this, 'question_8');"><label class="radio" for="no_6"></label>
                                                        <label for="no_6" class="wrapper">সন্তুষ্ট নয় </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="checkbox_radio_container">
                                                        <input type="radio" id="maybe_6" name="question_8" class="required" value="Maybe_6" onchange="getVals(this, 'question_8');"><label class="radio" for="maybe_6"></label>
                                                        <label for="maybe_6" class="wrapper">মোটামুটি সন্তুষ্ট </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="checkbox_radio_container">
                                                        <input type="radio" id="probably_6" name="question_8" class="required" value="Probably_6" onchange="getVals(this, 'question_8');"><label class="radio" for="probably_6"></label>
                                                        <label for="probably_6" class="wrapper">সন্তুষ্ট </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="checkbox_radio_container">
                                                        <input type="radio" id="sure_6" name="question_8" class="required" value="Sure_6" onchange="getVals(this, 'question_8');"><label class="radio" for="sure_6"></label>
                                                        <label for="sure_6" class="wrapper">মোটামুটি অসন্তুষ্ট </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="checkbox_radio_container">
                                                        <input type="radio" id="not_sure_6" name="question_8" class="required" value="Not_Sure_6" onchange="getVals(this, 'question_8');"><label class="radio" for="not_sure_6"></label>
                                                        <label for="not_sure_6" class="wrapper">একেবারেই অসন্তুষ্ট </label>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- /review_block-->
                                        <div class="form-group">
                                            <label for="additional_message_8_label">Leave your message</label>
                                            <textarea name="additional_message_8" id="additional_message_8_label" class="form-control" style="height:120px;" onkeyup="getVals(this, 'additional_message_8');"></textarea></div>
                                    </div>
                                    <!-- /step 8(B)-->
                                    <div class="step">
                                        <h3 class="main_question mb-4"><strong>8(B) of 19</strong>বর্তমানে আপনি বার্তা পাঠানোর জন্য যে মাধ্যম/মাধ্যমগুলো ব্যবহার করছেন তা ব্যবহার করে আপনি কতটুকু সন্তুষ্ট? (B)খরচ -</h3>
                                        <div class="review_block">
                                            <ul>
                                                <li>
                                                    <div class="checkbox_radio_container">
                                                        <input type="radio" id="no_6(B)" name="question_9" class="required" value="No_6(B)" onchange="getVals(this, 'question_9');"><label class="radio" for="no_6(B)"></label>
                                                        <label for="no_6(B)" class="wrapper">সন্তুষ্ট নয় </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="checkbox_radio_container">
                                                        <input type="radio" id="maybe_6(B)" name="question_9" class="required" value="Maybe_6(B)" onchange="getVals(this, 'question_9');"><label class="radio" for="maybe_6(B)"></label>
                                                        <label for="maybe_6(B)" class="wrapper">মোটামুটি সন্তুষ্ট </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="checkbox_radio_container">
                                                        <input type="radio" id="probably_6(B)" name="question_9" class="required" value="Probably_6(B)" onchange="getVals(this, 'question_9');"><label class="radio" for="probably_6(B)"></label>
                                                        <label for="probably_6(B)" class="wrapper">সন্তুষ্ট </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="checkbox_radio_container">
                                                        <input type="radio" id="sure_6(B)" name="question_9" class="required" value="Sure_6(B)" onchange="getVals(this, 'question_9');"><label class="radio" for="sure_6(B)"></label>
                                                        <label for="sure_6(B)" class="wrapper">মোটামুটি অসন্তুষ্ট </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="checkbox_radio_container">
                                                        <input type="radio" id="not_sure_6(B)" name="question_9" class="required" value="Not_Sure_6(B)" onchange="getVals(this, 'question_9');"><label class="radio" for="not_sure_6(B)"></label>
                                                        <label for="not_sure_6(B)" class="wrapper">একেবারেই অসন্তুষ্ট </label>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- /review_block-->
                                        <div class="form-group">
                                            <label for="additional_message_9_label">Leave your message</label>
                                            <textarea name="additional_message_9" id="additional_message_9_label" class="form-control" style="height:120px;" onkeyup="getVals(this, 'additional_message_9');"></textarea></div>
                                    </div>
                                    <!-- /step 8(C)-->
                                    <div class="step">
                                        <h3 class="main_question mb-4"><strong>8(C) of 19</strong>বর্তমানে আপনি বার্তা পাঠানোর জন্য যে মাধ্যম/মাধ্যমগুলো ব্যবহার করছেন তা ব্যবহার করে আপনি কতটুকু সন্তুষ্ট? (C)কার্যকারীতা -</h3>
                                        <div class="review_block">
                                            <ul>
                                                <li>
                                                    <div class="checkbox_radio_container">
                                                        <input type="radio" id="no_6(C)" name="question_10" class="required" value="No_6(C)" onchange="getVals(this, 'question_10');"><label class="radio" for="no_6(C)"></label>
                                                        <label for="no_6(C)" class="wrapper">সন্তুষ্ট নয় </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="checkbox_radio_container">
                                                        <input type="radio" id="maybe_6(C)" name="question_10" class="required" value="Maybe_6(C)" onchange="getVals(this, 'question_10');"><label class="radio" for="maybe_6(C)"></label>
                                                        <label for="maybe_6(C)" class="wrapper">মোটামুটি সন্তুষ্ট </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="checkbox_radio_container">
                                                        <input type="radio" id="probably_6(C)" name="question_10" class="required" value="Probably_6(C)" onchange="getVals(this, 'question_10');"><label class="radio" for="probably_6(C)"></label>
                                                        <label for="probably_6(C)" class="wrapper">সন্তুষ্ট </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="checkbox_radio_container">
                                                        <input type="radio" id="sure_6(C)" name="question_10" class="required" value="Sure_6(C)" onchange="getVals(this, 'question_10');"><label class="radio" for="sure_6(C)"></label>
                                                        <label for="sure_6(C)" class="wrapper">মোটামুটি অসন্তুষ্ট </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="checkbox_radio_container">
                                                        <input type="radio" id="not_sure_6(C)" name="question_10" class="required" value="Not_Sure_6(C)" onchange="getVals(this, 'question_10');"><label class="radio" for="not_sure_6(C)"></label>
                                                        <label for="not_sure_6(C)" class="wrapper">একেবারেই অসন্তুষ্ট </label>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- /review_block-->
                                        <div class="form-group">
                                            <label for="additional_message_10_label">Leave your message</label>
                                            <textarea name="additional_message_10" id="additional_message_10_label" class="form-control" style="height:120px;" onkeyup="getVals(this, 'additional_message_10');"></textarea></div>
                                    </div>
                                    <!-- /step 9-->
                                    <div class="step">
                                        <h3 class="main_question mb-4"><strong>9 of 19</strong>শিক্ষক, শিক্ষার্থী, ও অভিভাবকদের সাথে যোগাযোগের ক্ষেত্রে একাধিক যোগাযোগ মাধ্যম ব্যবহারের করতে গিয়ে কি কি সমস্যার সম্মুখীন হয়েছেন? </h3>
                                        <div class="review_block">
                                            <ul>
                                                <li>
                                                    <div class="checkbox_radio_container">
                                                        <input type="radio" id="no_7" name="question_11" class="required" value="No_7" onchange="getVals(this, 'question_11');"><label class="radio" for="no_7"></label>
                                                        <label for="no_7" class="wrapper">সময় বেশি লাগে </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="checkbox_radio_container">
                                                        <input type="radio" id="maybe_7" name="question_11" class="required" value="Maybe_7" onchange="getVals(this, 'question_11');"><label class="radio" for="maybe_7"></label>
                                                        <label for="maybe_7" class="wrapper">খরচ বেশি </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="checkbox_radio_container">
                                                        <input type="radio" id="probably_7" name="question_11" class="required" value="Probably_7" onchange="getVals(this, 'question_11');"><label class="radio" for="probably_7"></label>
                                                        <label for="probably_7" class="wrapper">কর্মঘন্টা বেশি </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="checkbox_radio_container">
                                                        <input type="radio" id="sure_7" name="question_11" class="required" value="Sure_7" onchange="getVals(this, 'question_11');"><label class="radio" for="sure_7"></label>
                                                        <label for="sure_7" class="wrapper">লোকবল বেশি </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="checkbox_radio_container">
                                                        <input type="radio" id="not_sure_7" name="question_11" class="required" value="Not_Sure_7" onchange="getVals(this, 'question_11');"><label class="radio" for="not_sure_7"></label>
                                                        <label for="not_sure_7" class="wrapper">তথ্য সন্নিবেশিত থাকে না </label>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- /review_block-->
                                        <div class="form-group">
                                            <label for="additional_message_11_label">Leave your message</label>
                                            <textarea name="additional_message_11" id="additional_message_11_label" class="form-control" style="height:120px;" onkeyup="getVals(this, 'additional_message_11');"></textarea></div>
                                    </div>
                                    <!-- /step 10-->
                                    <div class="step">
                                        <h3 class="main_question mb-4"><strong>10 of 19</strong>আপনার শিক্ষা প্রতিষ্ঠানের কি নিজস্ব ওয়েবসাইট আছে? </h3>
                                        <div class="review_block">
                                            <ul>
                                                <li>
                                                    <div class="checkbox_radio_container">
                                                        <input type="radio" id="no_8" name="question_12" class="required" value="No_8" onchange="getVals(this, 'question_12');"><label class="radio" for="no_8"></label>
                                                        <label for="no_8" class="wrapper">হ্যাঁ </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="checkbox_radio_container">
                                                        <input type="radio" id="maybe_8" name="question_12" class="required" value="Maybe_8" onchange="getVals(this, 'question_12');"><label class="radio" for="maybe_8"></label>
                                                        <label for="maybe_8" class="wrapper">না </label>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- /review_block-->
                                        <div class="form-group">
                                            <label for="additional_message_12_label">Leave your message</label>
                                            <textarea name="additional_message_12" id="additional_message_12_label" class="form-control" style="height:120px;" onkeyup="getVals(this, 'additional_message_12');"></textarea></div>
                                    </div>
                                    <!-- /step 11-->
                                    <div class="step">
                                        <h3 class="main_question mb-4"><strong>11 of 19</strong>১০ নং উত্তর হাঁ হলে- ওয়েবসাইটটিতে কি শিক্ষক, শিক্ষার্থী ও অভিভাবকদের জন্য আলাদা আলাদা লগ-ইনের ব্যবস্থা আছে? </h3>
                                        <div class="review_block">
                                            <ul>
                                                <li>
                                                    <div class="checkbox_radio_container">
                                                        <input type="radio" id="no_9" name="question_13" class="required" value="No_9" onchange="getVals(this, 'question_13');"><label class="radio" for="no_9"></label>
                                                        <label for="no_9" class="wrapper">হ্যাঁ </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="checkbox_radio_container">
                                                        <input type="radio" id="maybe_9" name="question_13" class="required" value="Maybe_9" onchange="getVals(this, 'question_13');"><label class="radio" for="maybe_9"></label>
                                                        <label for="maybe_9" class="wrapper">না </label>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- /review_block-->
                                        <div class="form-group">
                                            <label for="additional_message_13_label">Leave your message</label>
                                            <textarea name="additional_message_13" id="additional_message_13_label" class="form-control" style="height:120px;" onkeyup="getVals(this, 'additional_message_13');"></textarea></div>
                                    </div>
                                    <!-- /step 12-->
                                    <div class="step">
                                        <h3 class="main_question mb-4"><strong>12 of 19</strong>আপনার শিক্ষা প্রতিষ্ঠানে শিক্ষক, শিক্ষার্থী, কর্মচারী ও অভিভাবকদের তথ্য কিভাবে জমা রাখা হয়? </h3>
                                        <div class="review_block">
                                            <ul>
                                                <li>
                                                    <div class="checkbox_radio_container">
                                                        <input type="radio" id="no_10" name="question_14" class="required" value="No_10" onchange="getVals(this, 'question_14');"><label class="radio" for="no_10"></label>
                                                        <label for="no_10" class="wrapper">কাগজের ফাইলে </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="checkbox_radio_container">
                                                        <input type="radio" id="maybe_10" name="question_14" class="required" value="Maybe_10" onchange="getVals(this, 'question_14');"><label class="radio" for="maybe_10"></label>
                                                        <label for="maybe_10" class="wrapper">অফিস পিসিতে </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="checkbox_radio_container">
                                                        <input type="radio" id="probably_10" name="question_14" class="required" value="Probably_10" onchange="getVals(this, 'question_14');"><label class="radio" for="probably_10"></label>
                                                        <label for="probably_10" class="wrapper">অফিস ম্যানেজমেন্ট সিষ্টেমে (কমপ্লিট ডাটাবেজ ম্যানেজমেন্ট সিষ্টেম) </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="checkbox_radio_container">
                                                        <input type="radio" id="sure_10" name="question_14" class="required" value="Sure_10" onchange="getVals(this, 'question_14');"><label class="radio" for="sure_10"></label>
                                                        <label for="sure_10" class="wrapper">ক্লাউড শেয়ারিং </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="checkbox_radio_container">
                                                        <input type="radio" id="not_sure_10" name="question_14" class="required" value="Not_Sure_10" onchange="getVals(this, 'question_14');"><label class="radio" for="not_sure_10"></label>
                                                        <label for="not_sure_10" class="wrapper">অন্যান্য </label>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- /review_block-->
                                        <div class="form-group">
                                            <label for="additional_message_14_label">Leave your message</label>
                                            <textarea name="additional_message_14" id="additional_message_14_label" class="form-control" style="height:120px;" onkeyup="getVals(this, 'additional_message_14');"></textarea></div>
                                    </div>
                                    <!-- /step 13(A)-->
                                    <div class="step">
                                        <h3 class="main_question mb-4"><strong>13(A) of 19</strong>বর্তমানে আপনি বার্তা পাঠানোর জন্য যে মাধ্যম/মাধ্যমগুলো ব্যবহার করছেন তা ব্যবহার করে আপনি কতটুকু সন্তুষ্ট? (A)নতুন তথ্য সংযোজনে (নিউ এন্ট্রি) -</h3>
                                        <div class="review_block">
                                            <ul>
                                                <li>
                                                    <div class="checkbox_radio_container">
                                                        <input type="radio" id="no_11(A)" name="question_15" class="required" value="No_11(A)" onchange="getVals(this, 'question_15');"><label class="radio" for="no_11(A)"></label>
                                                        <label for="no_11(A)" class="wrapper">সন্তুষ্ট নয় </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="checkbox_radio_container">
                                                        <input type="radio" id="maybe_11(A)" name="question_15" class="required" value="Maybe_11(A)" onchange="getVals(this, 'question_15');"><label class="radio" for="maybe_11(A)"></label>
                                                        <label for="maybe_11(A)" class="wrapper">মোটামুটি সন্তুষ্ট </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="checkbox_radio_container">
                                                        <input type="radio" id="probably_11(A)" name="question_15" class="required" value="Probably_11(A)" onchange="getVals(this, 'question_15');"><label class="radio" for="probably_11(A)"></label>
                                                        <label for="probably_11(A)" class="wrapper">সন্তুষ্ট </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="checkbox_radio_container">
                                                        <input type="radio" id="sure_11(A)" name="question_15" class="required" value="Sure_11(A)" onchange="getVals(this, 'question_15');"><label class="radio" for="sure_11(A)"></label>
                                                        <label for="sure_11(A)" class="wrapper">মোটামুটি অসন্তুষ্ট </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="checkbox_radio_container">
                                                        <input type="radio" id="not_sure_11(A)" name="question_15" class="required" value="Not_Sure_11(A)" onchange="getVals(this, 'question_15');"><label class="radio" for="not_sure_11(A)"></label>
                                                        <label for="not_sure_11(A)" class="wrapper">একেবারেই অসন্তুষ্ট </label>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- /review_block-->
                                        <div class="form-group">
                                            <label for="additional_message_15_label">Leave your message</label>
                                            <textarea name="additional_message_15" id="additional_message_15_label" class="form-control" style="height:120px;" onkeyup="getVals(this, 'additional_message_15');"></textarea></div>
                                    </div>
                                    <!-- /step 13(B)-->
                                    <div class="step">
                                        <h3 class="main_question mb-4"><strong>13(B) of 19</strong>বর্তমানে আপনি বার্তা পাঠানোর জন্য যে মাধ্যম/মাধ্যমগুলো ব্যবহার করছেন তা ব্যবহার করে আপনি কতটুকু সন্তুষ্ট? (B)সময় ক্ষেপনের ভিত্তিতে -</h3>
                                        <div class="review_block">
                                            <ul>
                                                <li>
                                                    <div class="checkbox_radio_container">
                                                        <input type="radio" id="no_11(B)" name="question_16" class="required" value="No_11(B)" onchange="getVals(this, 'question_16');"><label class="radio" for="no_11(B)"></label>
                                                        <label for="no_11(B)" class="wrapper">সন্তুষ্ট নয় </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="checkbox_radio_container">
                                                        <input type="radio" id="maybe_11(B)" name="question_16" class="required" value="Maybe_11(B)" onchange="getVals(this, 'question_16');"><label class="radio" for="maybe_11(B)"></label>
                                                        <label for="maybe_11(B)" class="wrapper">মোটামুটি সন্তুষ্ট </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="checkbox_radio_container">
                                                        <input type="radio" id="probably_11(B)" name="question_16" class="required" value="Probably_11(B)" onchange="getVals(this, 'question_16');"><label class="radio" for="probably_11(B)"></label>
                                                        <label for="probably_11(B)" class="wrapper">সন্তুষ্ট </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="checkbox_radio_container">
                                                        <input type="radio" id="sure_11(B)" name="question_16" class="required" value="Sure_11(B)" onchange="getVals(this, 'question_16');"><label class="radio" for="sure_11(B)"></label>
                                                        <label for="sure_11(B)" class="wrapper">মোটামুটি অসন্তুষ্ট </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="checkbox_radio_container">
                                                        <input type="radio" id="not_sure_11(B)" name="question_16" class="required" value="Not_Sure_11(B)" onchange="getVals(this, 'question_16');"><label class="radio" for="not_sure_11(B)"></label>
                                                        <label for="not_sure_11(B)" class="wrapper">একেবারেই অসন্তুষ্ট </label>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- /review_block-->
                                        <div class="form-group">
                                            <label for="additional_message_16_label">Leave your message</label>
                                            <textarea name="additional_message_16" id="additional_message_16_label" class="form-control" style="height:120px;" onkeyup="getVals(this, 'additional_message_16');"></textarea></div>
                                    </div>
                                    <!-- /step 13(C)-->
                                    <div class="step">
                                        <h3 class="main_question mb-4"><strong>13(C) of 19</strong>বর্তমানে আপনি বার্তা পাঠানোর জন্য যে মাধ্যম/মাধ্যমগুলো ব্যবহার করছেন তা ব্যবহার করে আপনি কতটুকু সন্তুষ্ট? (C)দ্রুততার সাথে তথ্যের প্রাপ্তিতা -</h3>
                                        <div class="review_block">
                                            <ul>
                                                <li>
                                                    <div class="checkbox_radio_container">
                                                        <input type="radio" id="no_11(C)" name="question_17" class="required" value="No_11(C)" onchange="getVals(this, 'question_17');"><label class="radio" for="no_11(C)"></label>
                                                        <label for="no_11(C)" class="wrapper">সন্তুষ্ট নয় </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="checkbox_radio_container">
                                                        <input type="radio" id="maybe_11(C)" name="question_17" class="required" value="Maybe_11(C)" onchange="getVals(this, 'question_17');"><label class="radio" for="maybe_11(C)"></label>
                                                        <label for="maybe_11(C)" class="wrapper">মোটামুটি সন্তুষ্ট </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="checkbox_radio_container">
                                                        <input type="radio" id="probably_11(C)" name="question_17" class="required" value="Probably_11(C)" onchange="getVals(this, 'question_17');"><label class="radio" for="probably_11(C)"></label>
                                                        <label for="probably_11(C)" class="wrapper">সন্তুষ্ট </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="checkbox_radio_container">
                                                        <input type="radio" id="sure_11(C)" name="question_17" class="required" value="Sure_11(C)" onchange="getVals(this, 'question_17');"><label class="radio" for="sure_11(C)"></label>
                                                        <label for="sure_11(C)" class="wrapper">মোটামুটি অসন্তুষ্ট </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="checkbox_radio_container">
                                                        <input type="radio" id="not_sure_11(C)" name="question_17" class="required" value="Not_Sure_11(C)" onchange="getVals(this, 'question_17');"><label class="radio" for="not_sure_11(C)"></label>
                                                        <label for="not_sure_11(C)" class="wrapper">একেবারেই অসন্তুষ্ট </label>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- /review_block-->
                                        <div class="form-group">
                                            <label for="additional_message_17_label">Leave your message</label>
                                            <textarea name="additional_message_17" id="additional_message_17_label" class="form-control" style="height:120px;" onkeyup="getVals(this, 'additional_message_17');"></textarea></div>
                                    </div>
                                    <!-- /step 13(D)-->
                                    <div class="step">
                                        <h3 class="main_question mb-4"><strong>13(D) of 19</strong>বর্তমানে আপনি বার্তা পাঠানোর জন্য যে মাধ্যম/মাধ্যমগুলো ব্যবহার করছেন তা ব্যবহার করে আপনি কতটুকু সন্তুষ্ট? (D)খরচের ভিত্তিতে -</h3>
                                        <div class="review_block">
                                            <ul>
                                                <li>
                                                    <div class="checkbox_radio_container">
                                                        <input type="radio" id="no_11(D)" name="question_18" class="required" value="No_11(D)" onchange="getVals(this, 'question_18');"><label class="radio" for="no_11(D)"></label>
                                                        <label for="no_11(D)" class="wrapper">সন্তুষ্ট নয় </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="checkbox_radio_container">
                                                        <input type="radio" id="maybe_11(D)" name="question_18" class="required" value="Maybe_11(D)" onchange="getVals(this, 'question_18');"><label class="radio" for="maybe_11(D)"></label>
                                                        <label for="maybe_11(D)" class="wrapper">মোটামুটি সন্তুষ্ট </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="checkbox_radio_container">
                                                        <input type="radio" id="probably_11(D)" name="question_18" class="required" value="Probably_11(D)" onchange="getVals(this, 'question_18');"><label class="radio" for="probably_11(D)"></label>
                                                        <label for="probably_11(D)" class="wrapper">সন্তুষ্ট </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="checkbox_radio_container">
                                                        <input type="radio" id="sure_11(D)" name="question_18" class="required" value="Sure_11(D)" onchange="getVals(this, 'question_18');"><label class="radio" for="sure_11(D)"></label>
                                                        <label for="sure_11(D)" class="wrapper">মোটামুটি অসন্তুষ্ট </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="checkbox_radio_container">
                                                        <input type="radio" id="not_sure_11(D)" name="question_18" class="required" value="Not_Sure_11(D)" onchange="getVals(this, 'question_18');"><label class="radio" for="not_sure_11(D)"></label>
                                                        <label for="not_sure_11(D)" class="wrapper">একেবারেই অসন্তুষ্ট </label>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- /review_block-->
                                        <div class="form-group">
                                            <label for="additional_message_18_label">Leave your message</label>
                                            <textarea name="additional_message_18" id="additional_message_18_label" class="form-control" style="height:120px;" onkeyup="getVals(this, 'additional_message_18');"></textarea></div>
                                    </div>
                                    <!-- /step 13(E)-->
                                    <div class="step">
                                        <h3 class="main_question mb-4"><strong>13(E) of 19</strong>বর্তমানে আপনি বার্তা পাঠানোর জন্য যে মাধ্যম/মাধ্যমগুলো ব্যবহার করছেন তা ব্যবহার করে আপনি কতটুকু সন্তুষ্ট? (E)লোকবল ও ইউটেনসিলস্ এর ভিত্তিতে -</h3>
                                        <div class="review_block">
                                            <ul>
                                                <li>
                                                    <div class="checkbox_radio_container">
                                                        <input type="radio" id="no_11(E)" name="question_19" class="required" value="No_11(E)" onchange="getVals(this, 'question_19');"><label class="radio" for="no_11(E)"></label>
                                                        <label for="no_11(E)" class="wrapper">সন্তুষ্ট নয় </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="checkbox_radio_container">
                                                        <input type="radio" id="maybe_11(E)" name="question_19" class="required" value="Maybe_11(E)" onchange="getVals(this, 'question_19');"><label class="radio" for="maybe_11(E)"></label>
                                                        <label for="maybe_11(E)" class="wrapper">মোটামুটি সন্তুষ্ট </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="checkbox_radio_container">
                                                        <input type="radio" id="probably_11(E)" name="question_19" class="required" value="Probably_11(E)" onchange="getVals(this, 'question_19');"><label class="radio" for="probably_11(E)"></label>
                                                        <label for="probably_11(E)" class="wrapper">সন্তুষ্ট </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="checkbox_radio_container">
                                                        <input type="radio" id="sure_11(E)" name="question_19" class="required" value="Sure_11(E)" onchange="getVals(this, 'question_19');"><label class="radio" for="sure_11(E)"></label>
                                                        <label for="sure_11(E)" class="wrapper">মোটামুটি অসন্তুষ্ট </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="checkbox_radio_container">
                                                        <input type="radio" id="not_sure_11(E)" name="question_19" class="required" value="Not_Sure_11(E)" onchange="getVals(this, 'question_19');"><label class="radio" for="not_sure_11(E)"></label>
                                                        <label for="not_sure_11(E)" class="wrapper">একেবারেই অসন্তুষ্ট </label>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- /review_block-->
                                        <div class="form-group">
                                            <label for="additional_message_19_label">Leave your message</label>
                                            <textarea name="additional_message_19" id="additional_message_19_label" class="form-control" style="height:120px;" onkeyup="getVals(this, 'additional_message_19');"></textarea></div>
                                    </div>
                                    <!-- /step 14-->
                                    <div class="step">
                                        <h3 class="main_question mb-4"><strong>14 of 19</strong>শিক্ষক ও শিক্ষার্থীদের পরিপূর্ণ তথ্য সংরক্ষন ও ব্যবহার, ডিজিটাল ম্যানেজমেন্ট সিস্টেম প্রয়োগে আপনারা কি প্রস্তুত? </h3>
                                        <div class="review_block">
                                            <ul>
                                                <li>
                                                    <div class="checkbox_radio_container">
                                                        <input type="radio" id="no_12" name="question_20" class="required" value="No_12" onchange="getVals(this, 'question_20');"><label class="radio" for="no_12"></label>
                                                        <label for="no_12" class="wrapper">হ্যাঁ </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="checkbox_radio_container">
                                                        <input type="radio" id="maybe_12" name="question_20" class="required" value="Maybe_12" onchange="getVals(this, 'question_20');"><label class="radio" for="maybe_12"></label>
                                                        <label for="maybe_12" class="wrapper">না </label>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- /review_block-->
                                        <div class="form-group">
                                            <label for="additional_message_20_label">Leave your message</label>
                                            <textarea name="additional_message_20" id="additional_message_20_label" class="form-control" style="height:120px;" onkeyup="getVals(this, 'additional_message_20');"></textarea></div>
                                    </div>
                                    <!-- /step 15-->
                                    <div class="step">
                                        <h3 class="main_question mb-4"><strong>15 of 19</strong>শিক্ষক ও শিক্ষার্থীদের পরিপূর্ণ তথ্য সংরক্ষন ও ব্যবহার, ডিজিটাল ম্যানেজমেন্ট সিস্টেম প্রয়োগে আপনারা কি প্রস্তুত? </h3>
                                        <div class="review_block">
                                            <ul>
                                                <li>
                                                    <div class="checkbox_radio_container">
                                                        <input type="radio" id="no_13" name="question_21" class="required" value="No_13" onchange="getVals(this, 'question_21');"><label class="radio" for="no_13"></label>
                                                        <label for="no_13" class="wrapper">হ্যাঁ </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="checkbox_radio_container">
                                                        <input type="radio" id="maybe_13" name="question_21" class="required" value="Maybe_13" onchange="getVals(this, 'question_21');"><label class="radio" for="maybe_13"></label>
                                                        <label for="maybe_13" class="wrapper">না </label>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- /review_block-->
                                        <div class="form-group">
                                            <label for="additional_message_21_label">Leave your message</label>
                                            <textarea name="additional_message_21" id="additional_message_21_label" class="form-control" style="height:120px;" onkeyup="getVals(this, 'additional_message_21');"></textarea></div>
                                    </div>
                                    <!-- /step 16-->
                                    <div class="step">
                                        <h3 class="main_question mb-4"><strong>16 of 19</strong>শিক্ষা-মন্ত্রনালয়ের ডিজিটাল টেকনোলজী অনুসরণ করে আপনারা কোন এ্যাপ কি ব্যবহার করেছেন যা দিয়ে খুব কম খরচে কিংবা বিনা খরচে সকল ছাত্র-ছাত্রী, অভিভাবক ও শিক্ষকের সাথে যোগাযোগ করা যায়‍? </h3>
                                        <div class="review_block">
                                            <ul>
                                                <li>
                                                    <div class="checkbox_radio_container">
                                                        <input type="radio" id="no_14" name="question_22" class="required" value="No_14" onchange="getVals(this, 'question_22');"><label class="radio" for="no_14"></label>
                                                        <label for="no_14" class="wrapper">হ্যাঁ </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="checkbox_radio_container">
                                                        <input type="radio" id="maybe_14" name="question_22" class="required" value="Maybe_14" onchange="getVals(this, 'question_22');"><label class="radio" for="maybe_14"></label>
                                                        <label for="maybe_14" class="wrapper">না </label>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- /review_block-->
                                        <div class="form-group">
                                            <label for="additional_message_22_label">Leave your message</label>
                                            <textarea name="additional_message_22" id="additional_message_22_label" class="form-control" style="height:120px;" onkeyup="getVals(this, 'additional_message_22');"></textarea></div>
                                    </div>
                                    <!-- /step 17-->
                                    <div class="step">
                                        <h3 class="main_question mb-4"><strong>17 of 19</strong>আপনার কি অনলাইন ক্লাস নিয়েছেন? </h3>
                                        <div class="review_block">
                                            <ul>
                                                <li>
                                                    <div class="checkbox_radio_container">
                                                        <input type="radio" id="no_15" name="question_23" class="required" value="No_15" onchange="getVals(this, 'question_23');"><label class="radio" for="no_15"></label>
                                                        <label for="no_15" class="wrapper">হ্যাঁ </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="checkbox_radio_container">
                                                        <input type="radio" id="maybe_15" name="question_23" class="required" value="Maybe_15" onchange="getVals(this, 'question_23');"><label class="radio" for="maybe_15"></label>
                                                        <label for="maybe_15" class="wrapper">না </label>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- /review_block-->
                                        <div class="form-group">
                                            <label for="additional_message_23_label">Leave your message</label>
                                            <textarea name="additional_message_23" id="additional_message_23_label" class="form-control" style="height:120px;" onkeyup="getVals(this, 'additional_message_23');"></textarea></div>
                                    </div>
                                    <!-- /step 17(A)-->
                                    <div class="step">
                                        <h3 class="main_question mb-4"><strong>17(A) of 19</strong>17-এর উত্তর হাঁ হলে মাধ্যম কি ছিল -</h3>
                                        <div class="review_block">
                                            <ul>
                                                <li>
                                                    <div class="checkbox_radio_container">
                                                        <input type="radio" id="no_16(A)" name="question_24" class="required" value="No_16(A)" onchange="getVals(this, 'question_24');"><label class="radio" for="no_16(A)"></label>
                                                        <label for="no_16(A)" class="wrapper">গুগল মীঠ </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="checkbox_radio_container">
                                                        <input type="radio" id="maybe_16(A)" name="question_24" class="required" value="Maybe_16(A)" onchange="getVals(this, 'question_24');"><label class="radio" for="maybe_16(A)"></label>
                                                        <label for="maybe_16(A)" class="wrapper">ইনফোমী </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="checkbox_radio_container">
                                                        <input type="radio" id="probably_16(A)" name="question_24" class="required" value="Probably_16(A)" onchange="getVals(this, 'question_24');"><label class="radio" for="probably_16(A)"></label>
                                                        <label for="probably_16(A)" class="wrapper">জুম </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="checkbox_radio_container">
                                                        <input type="radio" id="sure_16(A)" name="question_24" class="required" value="Sure_16(A)" onchange="getVals(this, 'question_24);"><label class="radio" for="sure_16(A)"></label>
                                                        <label for="sure_16(A)" class="wrapper">মেসেন্জার </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="checkbox_radio_container">
                                                        <input type="radio" id="not_sure_16(A)" name="question_24" class="required" value="Not_Sure_16(A)" onchange="getVals(this, 'question_24');"><label class="radio" for="not_sure_16(A)"></label>
                                                        <label for="not_sure_16(A)" class="wrapper">মেসেন্জার </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="checkbox_radio_container">
                                                        <input type="radio" id="not_sure_16(x)" name="question_24" class="required" value="Not_Sure_16(x)" onchange="getVals(this, 'question_24');"><label class="radio" for="not_sure_16(x)"></label>
                                                        <label for="not_sure_16(x)" class="wrapper">অন্যান্য </label>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- /review_block-->
                                        <div class="form-group">
                                            <label for="additional_message_24_label">Leave your message</label>
                                            <textarea name="additional_message_24" id="additional_message_24_label" class="form-control" style="height:120px;" onkeyup="getVals(this, 'additional_message_24');"></textarea></div>
                                    </div>
                                    <!-- /step 17(B)-->
                                    <div class="step">
                                        <h3 class="main_question mb-4"><strong>17(B) of 19</strong>17-এর উত্তর না হলে নেবার পরিকল্পনা করেছেন ? </h3>
                                        <div class="review_block">
                                            <ul>
                                                <li>
                                                    <div class="checkbox_radio_container">
                                                        <input type="radio" id="no_16(B)" name="question_25" class="required" value="No_16(B)" onchange="getVals(this, 'question_25');"><label class="radio" for="no_16(B)"></label>
                                                        <label for="no_16(B)" class="wrapper">হ্যাঁ </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="checkbox_radio_container">
                                                        <input type="radio" id="maybe_16(B)" name="question_25" class="required" value="Maybe_16(B)" onchange="getVals(this, 'question_25');"><label class="radio" for="maybe_16(B)"></label>
                                                        <label for="maybe_16(B)" class="wrapper">না </label>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- /review_block-->
                                        <div class="form-group">
                                            <label for="additional_message_25_label">Leave your message</label>
                                            <textarea name="additional_message_25" id="additional_message_25_label" class="form-control" style="height:120px;" onkeyup="getVals(this, 'additional_message_25');"></textarea></div>
                                    </div>
                                    <!-- /step 17(C)-->
                                    <div class="step">
                                        <h3 class="main_question mb-4"><strong>17(C) of 19</strong>17(B)-এর উত্তর হাঁ হলে মাধ্যম কী হবে ভেবেছেন -</h3>
                                        <div class="review_block">
                                            <ul>
                                                <li>
                                                    <div class="checkbox_radio_container">
                                                        <input type="radio" id="no_16(C)" name="question_26" class="required" value="No_16(C)" onchange="getVals(this, 'question_26');"><label class="radio" for="no_16(C)"></label>
                                                        <label for="no_16(C)" class="wrapper">গুগল মীঠ </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="checkbox_radio_container">
                                                        <input type="radio" id="maybe_16(C)" name="question_26" class="required" value="Maybe_16(C)" onchange="getVals(this, 'question_26');"><label class="radio" for="maybe_16(C)"></label>
                                                        <label for="maybe_16(C)" class="wrapper">ইনফোমী </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="checkbox_radio_container">
                                                        <input type="radio" id="probably_16(C)" name="question_26" class="required" value="Probably_16(C)" onchange="getVals(this, 'question_26');"><label class="radio" for="probably_16(C)"></label>
                                                        <label for="probably_16(C)" class="wrapper">জুম </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="checkbox_radio_container">
                                                        <input type="radio" id="sure_16(C)" name="question_26" class="required" value="Sure_16(C)" onchange="getVals(this, 'question_26);"><label class="radio" for="sure_16(C)"></label>
                                                        <label for="sure_16(C)" class="wrapper">মেসেন্জার </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="checkbox_radio_container">
                                                        <input type="radio" id="not_sure_16(C)" name="question_26" class="required" value="Not_Sure_16(C)" onchange="getVals(this, 'question_26');"><label class="radio" for="not_sure_16(C)"></label>
                                                        <label for="not_sure_16(C)" class="wrapper">মেসেন্জার </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="checkbox_radio_container">
                                                        <input type="radio" id="not_sure_16(y)" name="question_26" class="required" value="Not_Sure_16(y)" onchange="getVals(this, 'question_26');"><label class="radio" for="not_sure_16(y)"></label>
                                                        <label for="not_sure_16(y)" class="wrapper">অন্যান্য </label>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- /review_block-->
                                        <div class="form-group">
                                            <label for="additional_message_26_label">Leave your message</label>
                                            <textarea name="additional_message_26" id="additional_message_26_label" class="form-control" style="height:120px;" onkeyup="getVals(this, 'additional_message_26');"></textarea></div>
                                    </div>
                                    <!-- /step 18-->
                                    <div class="step">
                                        <h3 class="main_question mb-4"><strong>18 of 19</strong>ছাত্র-শিক্ষক-কর্মচারী সবার জন্য তথ্য সংরক্ষনে ডাটাবজ ও তার ব্যবস্থাপনা, সবাইকে বিনামূল্যে, দ্রুততা ও নির্ভরশীলতার সাথে সমস্ত প্রয়োজনীয় বার্তাপ্রদান, এবং অনলাইন ক্লাস কার্যক্রম পরিচালনা—সবকিছুর
                                            জন্য যদি আপনাকে একটি মাত্র অ্যাপ ব্যবহার করার সুবিধা দেয়া হয় তা ব্যবহারে আপনি কি আগ্রহী? </h3>
                                        <div class="review_block">
                                            <ul>
                                                <li>
                                                    <div class="checkbox_radio_container">
                                                        <input type="radio" id="no_17" name="question_27" class="required" value="No_17" onchange="getVals(this, 'question_27');"><label class="radio" for="no_17"></label>
                                                        <label for="no_17" class="wrapper">হ্যাঁ </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="checkbox_radio_container">
                                                        <input type="radio" id="maybe_17" name="question_27" class="required" value="Maybe_17" onchange="getVals(this, 'question_27');"><label class="radio" for="maybe_17"></label>
                                                        <label for="maybe_17" class="wrapper">না </label>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- /review_block-->
                                        <div class="form-group">
                                            <label for="additional_message_27_label">Leave your message</label>
                                            <textarea name="additional_message_27" id="additional_message_27_label" class="form-control" style="height:120px;" onkeyup="getVals(this, 'additional_message_27');"></textarea></div>
                                    </div>

                                    <!-- /step 19-->

                                    <div class="submit step">
                                        <h3 class="main_question"><strong>19 of 19</strong>Please fill with your details</h3>
                                        <div class="form-group">
                                            <label for="firstname">Your Name</label>
                                            <input type="text" name="firstname" id="firstname" class="form-control required"></div>
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input type="email" name="email" id="email" class="form-control"></div>
                                        <div class="form-group">
                                            <label for="telephone">Phone</label>
                                            <input type="text" name="telephone" id="telephone" class="form-control required"></div>
                                        <div class="form-group">
                                            <label for="institute">Institute</label>
                                            <input type="text" name="institute" id="institute" class="form-control required"></div>
                                        <div class="row">
                                            <div class="col-9">
                                                <div class="form-group radio_input">
                                                    <label class="container_radio">Male
                                                        <input type="radio" name="gender" value="Male" class="required"><span class="checkmark"></span>
                                                    </label>
                                                    <label class="container_radio">Female
                                                        <input type="radio" name="gender" value="Female" class="required"><span class="checkmark"></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /row -->
                                        <div class="form-group terms">
                                            <label class="container_check">Please accept our <a href="#" data-toggle="modal" data-target="#terms-txt" style="color:#fff; text-decoration: underline;">Terms and conditions</a>
                                                <input type="checkbox" name="terms" value="Yes" class="required"><span class="checkmark"></span>
                                            </label>
                                        </div>
                                    </div>
                                    <!-- /step 5-->

                                </div>
                                <!-- /middle-wizard -->

                                <div id="bottom-wizard">
                                    <button type="button" name="backward" class="backward">Prev</button>
                                    <button type="button" name="forward" class="forward">Next</button>
                                    <button type="button" onclick="document.getElementById('wrapped').submit()" name="process" value="submit" class="submit">Submit</button>
                                </div>
                                <!-- /bottom-wizard -->
                            </form>
                        </div>
                        <!-- /Wizard container -->
                    </div>
                    <!-- /col -->
                </div>
            </div>
            <!-- /row -->
        </div>
        <!-- /container_centering -->
        <!-- /footer -->
    </div>
    <!-- /wrapper_centering -->

    <!-- Modal terms -->
    <div class="modal fade" id="terms-txt" tabindex="-1" role="dialog" aria-labelledby="termsLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="termsLabel">Terms and conditions</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    <p><strong>স্কুল ব্যবস্থাপনা, যোগাযোগ এবং অনলাইন ক্লাস সংক্রান্ত এই তথ্য কেবলমাত্র শিক্ষায় ডিজিটাল প্রযুক্তি প্রয়োগের গবেষণা, দিক-নির্দেশনা এবং নীতি-নির্ধারনে ব্যবহৃত হবে। আপনার/আপনাদের সহযোগিতার জন্য অসংখ্য ধন্যবাদ।।</strong></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn_1" data-dismiss="modal">Close</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->

    <!-- COMMON SCRIPTS -->
    <script src="{{asset('js/survey/4812-js-jquery-3.2.1.min.js')}}"></script>
    <script src="{{asset('js/survey/889-js-common_scripts.min.js')}}"></script>
    <script src="{{asset('js/survey/1003-js-functions.js')}}"></script>
    <!-- Wizard script -->
    <script src="{{asset('js/survey/1179-js-survey_func.js')}}"></script>
</body>

</html>