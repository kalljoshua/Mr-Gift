@extends('...layouts.user_layout')
@section('title')
    <title>::Mr.Gift::</title>
@endsection
@section('content')
    <!-- Content -->
    <div id="content">

        <!-- Linking -->
        <div class="linking">
            <div class="container">
                <ol class="breadcrumb">
                    <li><a href="Blog_details.html#">Home</a></li>
                    <li><a href="Blog_details.html#">Blog</a></li>
                    <li class="active">{{ $posts->title }}</li>
                </ol>
            </div>
        </div>

        <!-- Blog -->
        <section class="blog-single padding-top-30 padding-bottom-60">
            <div class="container">
                <div class="row">
                    <div class="col-md-9">

                        <!-- Blog Post -->
                        <div class="blog-post">
                            <article> <img class="img-responsive margin-bottom-20"
                                           src="/images/blog/user_810x400/{{$posts->image}}" alt="" >
                                <span>By: <strong>{{$posts->author->username}}</strong></span>
                                <span><i class="fa fa-clock-o"></i> {{$posts->created_at->diffForHumans()}}</span>
                                <span><i class="fa fa-comment-o"></i> {{$posts->comments->count()}} Comments</span>
                                <h5>{{ $posts->title }}</h5>
                                <p>{!! $posts->body!!}</p>
                            </article>

                            <!-- Comments -->
                            <div class="comments">
                                <h6 class="margin-0">Comments ({{$posts->comments->count()}})</h6>
                                <ul>
                                    <!-- Comments -->
                                    @foreach($posts->comments as $comment)
                                    <li class="media">
                                        <div class="media-left"> <a href="#" class="avatar">
                                                <img src="/images/users/home_71x71/{{$comment->user->image}}" alt=""> </a> </div>
                                        <div class="media-body padding-left-20">
                                            <h6>{{$comment->user->name}}
                                                <span><i class="fa fa-clock-o"></i> {{$comment->created_at->diffForHumans()}} </span> </h6>
                                            <p>{{ $comment->body }}</p>
                                        </div>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>

                            <!-- ADD comments -->
                            <div class="add-comments padding-top-20">
                                <h6>Leave a Comment</h6>
                            @if(Auth::guard('user')->check())
                                <!-- FORM -->
                                <form method="post" action="{{route('user.comment.submit')}}">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <input type="hidden" name="on_post" value="{{ $posts->id }}">
                                    <input type="hidden" name="slug" value="{{ $posts->slug }}">
                                    <ul class="row">
                                        <li class="col-sm-12">
                                            <label>Message
                                                <textarea class="form-control" name = "body" rows="5" placeholder=""></textarea>
                                            </label>
                                        </li>
                                        <li class="col-sm-12 text-left">
                                            <button type="submit" class="btn-round">Send Message</button>
                                        </li>
                                    </ul>
                                </form>
                                @else
                                    <a href="{{route('user.login.register')}}">
                                        <p style="color: red;">Login to comment on this Post</p>
                                    </a>
                                @endif
                            </div>
                        </div>
                    </div>

                    <!-- Side Bar -->
                    @include('user.right_bar')
                </div>
            </div>
        </section>

    </div>
    <!-- End Content -->

@endsection