@extends('...layouts.user_layout')
@section('title')
    <title>Mr.Gift-Online Gifts Shopping Mall</title>
@endsection
@section('content')

        @include('user.banner')
<!-- Content -->
<div id="content">

    <!-- Shipping Info -->
    <section class="shipping-info padding-top-30">
        <div class="container">
            <div class="heading">
                <h2>Mr.Gift Packages</h2>
                <hr>
            </div>
            <ul>
                <!-- Free Shipping -->
                <li>
                    <a href="#" data-toggle="modal" data-target="#modal-bronze">
                        <div class="media-left">
                            <i class="flaticon-business" style="color: #ED70A8"></i> </div>
                        <div class="media-body">
                            <h5 style="font-size: 25px; color: #ED70A8">Bronze Package</h5>
                            <span style="color:black">UGX 45,000.00</span>
                            <br>
                            <span style="padding-right:7px;" class="pull-right">Read more</span>
                        </div>
                    </a>
                </li>
                <!-- Money Return -->
                <li>
                    <a href="#" data-toggle="modal" data-target="#modal-silver">
                        <div class="media-left">
                            <i class="flaticon-business" style="color: #8822EF;"></i> </div>
                        <div class="media-body">
                            <h5 style="font-size: 25px; color: #8822EF;">Silver Package</h5>
                            <span style="color:black">UGX 75,000.00</span>
                            <br>
                            <span style="padding-right:7px;"class="pull-right">Read more</span>
                        </div>
                    </a>
                </li>
                <!-- Support 24/7 -->
                <li>
                    <a href="#" data-toggle="modal" data-target="#modal-golden">
                        <div class="media-left">
                            <i class="flaticon-business" style="color: #33CC89;"></i></div>
                        <div class="media-body">
                            <h5 style="font-size: 25px; color: #33CC89;">Golden Package</h5>
                            <span style="color:black">UGX 125,000.00</span>
                            <br>
                            <span style="padding-right:7px;"class="pull-right">Read more</span>
                        </div>
                    </a>
                </li>
                <!-- Safe Payment -->
                <li>
                    <a href="#" data-toggle="modal" data-target="#modal-platinum">
                        <div class="media-left">
                            <i class="flaticon-business" style="color: #15CDCD"></i> </div>
                        <div class="media-body">
                            <h5 style="font-size: 24px; color: #15CDCD">Platinum Package</h5>
                            <span style="color:black">UGX 150,000.00</span>
                            <br>
                            <span style="padding-right:7px;"class="pull-right">Read more</span>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
    </section>

    @include('user.packages')

    <section class="main-tabs-sec padding-top-60 padding-bottom-0">
        <div class="container">
            <div class="heading">
                <h2>Choose Gifts By Occasion</h2>
                <hr>
            </div>
            <ul class="nav margin-bottom-40" role="tablist">
                @foreach($categories as $category)
                    <li role="presentation" @if($categories[0]->id == $category->id) class="active" @endif>
                        <a href="#tv-au{{$category->id}}" aria-controls="featur" role="tab" data-toggle="tab">
                            <i class="flaticon-computer"></i> {{$category->name}}
                            <span>{{$category->products->count()}} item(s)</span></a></li>
                @endforeach
            </ul>
        <?php $count = 0; ?>
        <!-- Tab panes -->
            <div class="tab-content">
                <!-- TV & Audios -->
                @foreach($categories as $category)
                    @if($categories[0]->id == $category->id)
                        <div role="tabpanel" class="tab-pane active fade in" id="tv-au{{$category->id}}">

                            <!-- Items -->
                            <div class="item-slide-5 with-bullet no-nav">
                                <!-- Product -->
                                @foreach($category->products as $product)
                                    <div class="product">
                                        <article> <img class="img-responsive"
                                                       src="/images/products/service_listing_364x244/{{$product->image}}" alt="" >
                                            <span class="sale-tag"><i class="fa fa-eye"></i> {{$product->views}}</span>

                                            <!-- Content -->
                                            <span class="tag">{{$product->occassion->name}}</span>
                                            <a href="{{route('product.details',['product_id' => $product->id])}}" class="tittle">
                                                {{$product->name}}</a>
                                            <!-- Reviews -->
                                            <p>
                                        <span class="tour-price-single animated growIn slower"
                                              style="color: #FDC600; font-size: 15px">
                                                @for ($k=1; $k <= 5 ; $k++)
                                                <span data-title="Average Rate: 5 / 5"
                                                      class="bottom-ratings tip">
                                                        <span class="glyphicon glyphicon-star{{ ($k <= $product->rating) ? '' : '-empty'}}"
                                                              style="font-size: 15px"></span>
                                                    </span>
                                            @endfor
                                            ({{$product->rating}})
                                        </span></p>
                                            <p class="text-danger">
                                                <span class="margin-left-10">{{$product->reviews->count()}} Review(s)</span>
                                            </p>
                                            <div class="price">UGX {{number_format($product->price)}}</div>
                                            <form action="{{ route('cart.store') }}" method="POST">
                                                {{ csrf_field() }}
                                                <input type="hidden" name="id" value="{{ $product->id }}">
                                                <input type="hidden" name="name" value="{{ $product->name }}">
                                                <input type="hidden" name="price" value="{{ $product->price }}">
                                                <button type="submit" class="cart-btn">
                                                    <i class="icon-basket-loaded"></i></button>
                                            </form>

                                        </article>
                                    </div>
                                @endforeach

                            </div>
                        </div>
                    @else
                        <div role="tabpanel" class="tab-pane fade" id="tv-au{{$category->id}}">
                            <!-- Items -->
                            <div class="item-col-5">

                                <!-- Product -->
                                <?php $x = 1; ?>
                                @foreach($category->products as $product)
                                    @if($x<=5)
                                        <div class="product">
                                            <article> <img class="img-responsive"
                                                           src="/images/products/service_listing_364x244/{{$product->image}}" alt="" >
                                                <span class="sale-tag"><i class="fa fa-eye"></i> {{$product->views}}</span>

                                                <!-- Content -->
                                                <span class="tag">{{$product->occassion->name}}</span>
                                                <a href="{{route('product.details',['product_id' => $product->id])}}" class="tittle">
                                                    {{$product->name}}</a>
                                                <!-- Reviews -->
                                                <p>
                                        <span class="tour-price-single animated growIn slower"
                                              style="color: #FDC600; font-size: 15px">
                                                @for ($k=1; $k <= 5 ; $k++)
                                                <span data-title="Average Rate: 5 / 5"
                                                      class="bottom-ratings tip">
                                                        <span class="glyphicon glyphicon-star{{ ($k <= $product->rating) ? '' : '-empty'}}"
                                                              style="font-size: 15px"></span>
                                                    </span>
                                            @endfor
                                            ({{$product->rating}})
                                        </span></p>
                                                <p class="text-danger">
                                                    <span class="margin-left-10">{{$product->reviews->count()}} Review(s)</span>
                                                </p>
                                                <div class="price">UGX {{number_format($product->price)}}</div>
                                                <form action="{{ route('cart.store') }}" method="POST">
                                                    {{ csrf_field() }}
                                                    <input type="hidden" name="id" value="{{ $product->id }}">
                                                    <input type="hidden" name="name" value="{{ $product->name }}">
                                                    <input type="hidden" name="price" value="{{ $product->price }}">
                                                    <button type="submit" class="cart-btn">
                                                        <i class="icon-basket-loaded"></i></button>
                                                </form>
                                            </article>
                                        </div>
                                @endif
                                <?php $x++; ?>
                            @endforeach
                            <!-- Product -->

                            </div>
                        </div>
                    @endif
                @endforeach


            </div>
        </div>
    </section>

    <!-- tab Section -->
    @if(sizeof($featured_products)>0)
    <section class="featur-tabs padding-top-60 padding-bottom-60">
        <div class="container">

            <!-- Nav tabs -->
            <ul class="nav nav-tabs nav-pills margin-bottom-40" role="tablist">
                <li role="presentation" class="active">
                    <a href="index.html#featur" aria-controls="featur" role="tab"
                       style="data-toggle="tab">Featured Gifts</a></li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
                <!-- Featured -->
                <div role="tabpanel" class="tab-pane active fade in" id="featur">
                    <!-- Items Slider -->
                    <div class="item-slide-5 with-nav">
                        <!-- Product -->
                        @foreach($featured_products as $product)
                            <div class="product">
                                <article> <img class="img-responsive"
                                               src="/images/products/service_listing_364x244/{{$product->image}}" alt="" >
                                    <span class="sale-tag"><i class="fa fa-eye"></i> {{$product->views}}</span>

                                    <!-- Content -->
                                    <span class="tag">{{$product->sub_category->category->name}}</span>
                                    <a href="{{route('product.details',['product_id' => $product->id])}}" class="tittle">
                                        {{$product->name}}</a>
                                    <!-- Reviews -->
                                    <p>
                                        <span class="tour-price-single animated growIn slower"
                                              style="color: #FDC600; font-size: 15px">
                                                @for ($k=1; $k <= 5 ; $k++)
                                                <span data-title="Average Rate: 5 / 5"
                                                      class="bottom-ratings tip">
                                                        <span class="glyphicon glyphicon-star{{ ($k <= $product->rating) ? '' : '-empty'}}"
                                                              style="font-size: 15px"></span>
                                                    </span>
                                            @endfor
                                            ({{$product->rating}})
                                        </span>
                                    </p>
                                    <p class="text-danger">
                                        <span class="margin-left-10">{{$product->reviews->count()}} Review(s)</span>
                                    </p>
                                    <div class="price">UGX {{number_format($product->price)}}</div>
                                        <form action="{{ route('cart.store') }}" method="POST">
                                            {{ csrf_field() }}
                                            <input type="hidden" name="id" value="{{ $product->id }}">
                                            <input type="hidden" name="name" value="{{ $product->name }}">
                                            <input type="hidden" name="price" value="{{ $product->price }}">
                                            <button type="submit" class="cart-btn">
                                                <i class="icon-basket-loaded"></i></button>
                                        </form>
                                    </article>
                            </div>
                        @endforeach
                    </div>
                </div>

            </div>
        </div>
    </section>
    @endif

    <!-- Top Selling Week -->
    <section class="light-gry-bg padding-top-60 padding-bottom-30">
        <div class="container">

            <!-- heading -->
            <div class="heading">
                <h2>Recommended For You</h2>
                <hr>
            </div>

            <!-- Items -->
            <div class="item-col-5">

                <!-- Product -->
                @if(!is_null($topViewed))
                <div class="product col-2x">
                    <div class="like-bnr"
                         style="background: #f5f5f5 url(/images/products/our_locaion_370x370/{{$topViewed->image}}) right center no-repeat;">
                        <div class="position-center-center">
                            <h5>{{$topViewed->name}}</h5>
                            <p>{{ str_limit($topViewed->description, $limit = 70, $end = '...') }} </p>
                            <a href="{{route('product.details',['product_id' => $topViewed->id])}}"
                               class="btn-round">View Detail</a>
                        </div>
                    </div>
                </div>
                @endif

                <!-- Product -->
                @foreach($most_viewed as $product)
                    <div class="product">
                        <article> <img class="img-responsive"
                                       src="/images/products/service_listing_364x244/{{$product->image}}" alt="" >
                            <span class="sale-tag"><i class="fa fa-eye"></i> {{$product->views}}</span>

                            <!-- Content -->
                            <span class="tag">{{$product->sub_category->category->name}}</span>
                            <a href="{{route('product.details',['product_id' => $product->id])}}" class="tittle">
                                {{$product->name}}</a>
                            <!-- Reviews -->
                            <p>
                                        <span class="tour-price-single animated growIn slower"
                                              style="color: #FDC600; font-size: 15px">
                                                @for ($k=1; $k <= 5 ; $k++)
                                                <span data-title="Average Rate: 5 / 5"
                                                      class="bottom-ratings tip">
                                                        <span class="glyphicon glyphicon-star{{ ($k <= $product->rating) ? '' : '-empty'}}"
                                                              style="font-size: 15px"></span>
                                                    </span>
                                            @endfor
                                            ({{$product->rating}})
                                        </span></p>
                            <p>
                                <span class="margin-left-10 text-danger">{{$product->reviews->count()}} Review(s)</span>

                            </p>
                            <div class="price">UGX {{number_format($product->price)}}
                                <span>
                                    </span></div>
                                <form action="{{ route('cart.store') }}" method="POST">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="id" value="{{ $product->id }}">
                                    <input type="hidden" name="name" value="{{ $product->name }}">
                                    <input type="hidden" name="price" value="{{ $product->price }}">
                                    <button type="submit" class="cart-btn">
                                        <i class="icon-basket-loaded"></i></button>
                                </form>
                        </article>
                    </div>
                @endforeach

            </div>
        </div>
    </section>

    <!-- Main Tabs Sec -->


    <!-- Top Selling Week -->
    @if(sizeof($posts)>0)
    <section class="padding-top-60 padding-bottom-60">
        <div class="container">

            <!-- heading -->
            <div class="heading">
                <h2>Tips & Advise</h2>
                <hr>
            </div>
            <div id="blog-slide" class="with-nav">
                <!-- Blog Post -->
                @foreach($posts as $post)
                <div class="blog-post">
                    <article> <img class="img-responsive" src="/images/blog/user_810x400/{{$post->image}}" alt="" >
                        <span><i class="fa fa-clock-o"></i>{{$post->created_at->diffForHumans()}}</span> <span>
                            <i class="fa fa-comment-o"></i> {{$post->comments->count()}} Comments</span>
                        <a href="{{route('user.show.posts',['slug'=>$post->slug])}}" class="tittle">
                            {{$post->title}} </a>
                        <p>{!! str_limit($post->body, $limit = 90, $end = '[...]') !!}</p>
                        <a href="{{route('user.show.posts',['slug'=>$post->slug])}}">Readmore</a> </article>
                </div>
                @endforeach

            </div>
        </div>
    </section>
    @endif

    <!-- Clients img -->
    @include('user.sponsors')

    <!-- Newslatter -->
</div>
<!-- End Content -->
@endsection
