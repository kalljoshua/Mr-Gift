<div class="col-md-3">
    <div class="shop-side-bar">
        <!-- Categories -->
        <h6>Categories</h6>
        <div class="panel-group" id="accordion">
            @foreach(App\Category::all() as $category)
                <div class="panel panel-default" >
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree{{$category->id}}">
                        <div class="panel-heading" style="">
                            <h6 class="panel-title" style="font-size: 12px; margin-bottom: 1px">
                                <span class="glyphicon glyphicon-tags"> </span>
                                &nbsp;{{$category->name}}
                                <span class="glyphicon glyphicon-plus pull-right"> </span>
                            </h6>

                        </div>
                    </a>
                    <div id="collapseThree{{$category->id}}" class="panel-collapse collapse">
                        <div class="panel-body">
                            <table class="table">
                                @foreach($category->sub_categories as $sub_category)
                                    <tr>
                                        <td>
                                            <a href="{{route('product.category',['id'=>$sub_category->id])}}"
                                               style="font-size: 13px">
                                                {{$sub_category->name}}</a>
                                            <span class="label label-info pull-right">
                                                            {{$sub_category->products->count()}}</span>
                                        </td>
                                    </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>

            @endforeach
        </div>

        <!-- Recent Posts -->
        <h6>Recent Posts</h6>
        <div class="recent-post">

            <!-- Recent Posts -->
            @foreach(App\Post::orderBy('created_at','DESC')->get() as $post)
                <div class="media">
                    <div class="media-left">
                        <a href="{{route('user.show.posts',['slug'=>$post->slug])}}">
                            <img class="img-responsive" src="/images/blog/user_810x400/{{$post->image}}" alt="">
                        </a>
                    </div>
                    <div class="media-body">
                        <a href="{{route('user.show.posts',['slug'=>$post->slug])}}">
                            {{$post->title}}
                        </a>
                        <span><i class="fa fa-clock-o"></i> {{$post->created_at->diffForHumans()}} </span>
                        <span> {{$post->comments->count()}} Comments</span> </div>
                </div>
            @endforeach
        </div>

    </div>
</div>