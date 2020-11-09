@extends('layouts.main')
@section('content')
    <!--------------------------------------------------------------------
----------------------------------------------------------------------
-----Start:- Main NewsFeed Container
----------------------------------------------------------------------
--------------------------------------------------------------------->
<div class="newsfeed_container">
    <div class="center_newsfeed">

        <!--------------------------------------------------------------------
        ----------------------------------------------------------------------
        -----Start:- News Upload form
        ----------------------------------------------------------------------
        --------------------------------------------------------------------->
        <div class="post_form_container">
            <form action="#">
                <input type="text" placeholder="Enter Post Title" class="input">
                <input type="text" placeholder="Enter Post Description" class="input">
                <div class="file-select">
                    <label for="chooseFile">Choose File</label>
                    <input type="file" name="chooseFile" id="chooseFile" required alt="Post" accept="image/jpeg, image/png">
                </div>
                <button>Post</button>
            </form>
        </div>
        <!--------------------------------------------------------------------
        ----------------------------------------------------------------------
        -----End:- News Upload form
        ----------------------------------------------------------------------
        --------------------------------------------------------------------->

        <!--------------------------------------------------------------------
        ----------------------------------------------------------------------
        -----Start:- Single News Container
        ----------------------------------------------------------------------
        --------------------------------------------------------------------->
        <div class="post_container">
            <!--------------------------------------------------------------------
            ----------------------------------------------------------------------
            -----Start:- Post Header
            ----------------------------------------------------------------------
            --------------------------------------------------------------------->
            <div class="post_header">
                <a href="#">
                    <div class="post_institute_logo">
                        <h1>A</h1>
                    </div>
                </a>
                <div class="post_institute_name">
                    <h1>AUID</h1>
                </div>
            </div>
            <!--------------------------------------------------------------------
            ----------------------------------------------------------------------
            -----Start:- Post Description
            ----------------------------------------------------------------------
            --------------------------------------------------------------------->
            <div class="post_description">
                <div class="post_des_title">
                    <h3>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</h3>
                </div>
                <div class="post_des">
                    <p>when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.when an unknown remaining es.</p>
                </div>
            </div>
            <!--------------------------------------------------------------------
            ----------------------------------------------------------------------
            -----Start:- Post Image
            ----------------------------------------------------------------------
            --------------------------------------------------------------------->
            <div class="post_image">
                <img src="https://cdn.pixabay.com/photo/2020/10/28/11/08/castle-5693094__340.jpg" alt="">
            </div>
            <!--------------------------------------------------------------------
            ----------------------------------------------------------------------
            -----Start:- Post Footer Comment and share section
            ----------------------------------------------------------------------
            --------------------------------------------------------------------->
            <div class="post_footer">
                <div class="comment_button">
                    <h1>Add a comment</h1>
                </div>
                <div class="comment_box">
                    <div class="comment">
                        <a href="#">
                            <div class="comment_institute_logo">
                                <h1>A</h1>
                            </div>
                        </a>
                        <div class="comment_description">
                            <div class="comment_des_institute_name">
                                <h1>AUID</h1>
                            </div>
                            <div class="comment_body">
                                <p>when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into.</p>
                            </div>
                        </div>
                    </div>
                    <div class="comment">
                        <a href="#">
                            <div class="comment_institute_logo">
                                <h1>N</h1>
                            </div>
                        </a>
                        <div class="comment_description">
                            <div class="comment_des_institute_name">
                                <h1>NSU</h1>
                            </div>
                            <div class="comment_body">
                                <p>when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into.</p>
                            </div>
                        </div>
                    </div>
                    <div class="comment_form">
                        <form action="#">
                            <a href="#">
                                <div class="comment_form_inst_logo">
                                    <h1>A</h1>
                                </div>
                            </a>
                            <input type="text" placeholder="Write your comment here...">
                            <button>Comment</button>
                        </form>
                    </div>
                </div>
            </div>
            <!--------------------------------------------------------------------
            ----------------------------------------------------------------------
            -----End:- Post Footer Comment and share section
            ----------------------------------------------------------------------
            --------------------------------------------------------------------->
        </div>
        <!--------------------------------------------------------------------
        ----------------------------------------------------------------------
        -----End:- Single News Container
        ----------------------------------------------------------------------
        --------------------------------------------------------------------->

        <!--------------------------------------------------------------------
        ----------------------------------------------------------------------
        -----Start:- Single News Container
        ----------------------------------------------------------------------
        --------------------------------------------------------------------->
        <div class="post_container">
            <!--------------------------------------------------------------------
            ----------------------------------------------------------------------
            -----Start:- Post Header
            ----------------------------------------------------------------------
            --------------------------------------------------------------------->
            <div class="post_header">
                <a href="#">
                    <div class="post_institute_logo">
                        <h1>A</h1>
                    </div>
                </a>
                <div class="post_institute_name">
                    <h1>AUID</h1>
                </div>
            </div>
            <!--------------------------------------------------------------------
            ----------------------------------------------------------------------
            -----Start:- Post Description
            ----------------------------------------------------------------------
            --------------------------------------------------------------------->
            <div class="post_description">
                <div class="post_des_title">
                    <h3>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</h3>
                </div>
                <div class="post_des">
                    <p>when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.when an unknown remaining es.</p>
                </div>
            </div>
            <!--------------------------------------------------------------------
            ----------------------------------------------------------------------
            -----Start:- Post Image
            ----------------------------------------------------------------------
            --------------------------------------------------------------------->
            <div class="post_image">
                <img src="https://cdn.pixabay.com/photo/2020/10/27/09/44/macarons-5690175__340.jpg" alt="">
            </div>
            <!--------------------------------------------------------------------
            ----------------------------------------------------------------------
            -----Start:- Post Footer Comment and share section
            ----------------------------------------------------------------------
            --------------------------------------------------------------------->
            <div class="post_footer">
                <div class="comment_button">
                    <h1>Add a comment</h1>
                </div>
                <div class="comment_box">
                    <div class="comment">
                        <a href="#">
                            <div class="comment_institute_logo">
                                <h1>A</h1>
                            </div>
                        </a>
                        <div class="comment_description">
                            <div class="comment_des_institute_name">
                                <h1>AUID</h1>
                            </div>
                            <div class="comment_body">
                                <p>when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into.</p>
                            </div>
                        </div>
                    </div>
                    <div class="comment">
                        <a href="#">
                            <div class="comment_institute_logo">
                                <h1>N</h1>
                            </div>
                        </a>
                        <div class="comment_description">
                            <div class="comment_des_institute_name">
                                <h1>NSU</h1>
                            </div>
                            <div class="comment_body">
                                <p>when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into.</p>
                            </div>
                        </div>
                    </div>
                    <div class="comment_form">
                        <form action="#">
                            <a href="#">
                                <div class="comment_form_inst_logo">
                                    <h1>A</h1>
                                </div>
                            </a>
                            <input type="text" placeholder="Write your comment here...">
                            <button>Comment</button>
                        </form>
                    </div>
                </div>
            </div>
            <!--------------------------------------------------------------------
            ----------------------------------------------------------------------
            -----End:- Post Footer Comment and share section
            ----------------------------------------------------------------------
            --------------------------------------------------------------------->
        </div>
        <!--------------------------------------------------------------------
        ----------------------------------------------------------------------
        -----End:- Single News Container
        ----------------------------------------------------------------------
        --------------------------------------------------------------------->

    </div>
</div>
<!--------------------------------------------------------------------
----------------------------------------------------------------------
-----End:- Main NewsFeed Container
----------------------------------------------------------------------
--------------------------------------------------------------------->
@endsection