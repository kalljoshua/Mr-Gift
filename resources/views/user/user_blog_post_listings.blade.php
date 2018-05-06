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
                    <li><a href="Blog.html#">Home</a></li>
                    <li class="active">Blog</li>
                </ol>
            </div>
        </div>

        <!-- Blog -->
        <section class="blog-page padding-top-30 padding-bottom-60">
            <div class="container">
                <div class="row">
                    <div class="col-md-9">

                        <!-- Blog Post -->
                        @foreach($posts as $post)
                        <div class="blog-post">
                            <article class="row">
                                <div class="col-xs-7">
                                    <img class="img-responsive" src="/images/blog/user_810x400/{{$post->image}}" alt="" > </div>
                                <div class="col-xs-5"> <span>
                                        <i class="fa fa-clock-o"></i> {{$post->created_at->diffForHumans()}}</span>
                                    <span><i class="fa fa-comment-o"></i> {{$post->comments->count()}} Comments</span>
                                    <a href="{{route('user.show.posts',['slug'=>$post->slug])}}" class="tittle">
                                        {{$post->title}} </a>
                                    <p>{!! str_limit($post->body, $limit = 120, $end = '[...]') !!}</p>
                                    <a href="{{route('user.show.posts',['slug'=>$post->slug])}}">Readmore</a></div>
                            </article>
                        </div>
                        @endforeach

                        <!-- pagination -->
                        <ul class="pagination">
                            <?php echo $posts->render(); ?>
                        </ul>
                    </div>

                    <!-- Side Bar -->
                    @include('user.right_bar')
                </div>
            </div>
        </section>


    </div>
    <!-- End Content -->

@endsection