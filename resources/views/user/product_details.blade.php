@extends('...layouts.user_layout')
@section('title')
    <title>::Mr.Gift:: {{$product->name}}</title>
@endsection

@section('content')
    <!-- Content -->
    <div id="content">
        <!-- Products -->
        <section class="padding-top-40 padding-bottom-60">
            <div class="container">
                <div class="row">
                    <!-- Shop Side Bar -->
                    @include('user.left_menu')

                    <!-- Products -->
                    <div class="col-md-9">
                        <div class="product-detail">
                            <div class="product">
                                <div class="row">
                                    <!-- Slider Thumb -->
                                    <div class="col-xs-5">
                                        <article class="slider-item on-nav">
                                            <!-- <div id="slider" class="thumb-slider">
                                               <ul class="slides">
                                                  <li data-thumb="images/item-img-1-1.jpg"> <img src="/client_inc/images/item-img-1-1.jpg" alt="" > </li>
                                                  <li data-thumb="images/item-img-1-2.jpg"> <img src="/client_inc/images/item-img-1-2.jpg" alt="" > </li>
                                                  <li data-thumb="images/item-img-1-3.jpg"> <img src="/client_inc/images/item-img-1-3.jpg" alt="" > </li>
                                                  <li data-thumb="images/item-img-1-3.jpg"> <img src="/client_inc/images/item-img-1-3.jpg" alt="" > </li>
                                                  <li data-thumb="images/item-img-1-3.jpg"> <img src="/client_inc/images/item-img-1-3.jpg" alt="" > </li>
                                               </ul>
                                            </div>
                                                                                  <div id="carousel" class="thumb-slider">
                                             <ul class="slides">
                                               <li>
                                                 <img src="slide1.jpg" />
                                               </li>
                                               <li>
                                                 <img src="slide2.jpg" />
                                               </li>
                                               <li>
                                                 <img src="slide3.jpg" />
                                               </li>
                                               <li>
                                                 <img src="slide4.jpg" />
                                               </li>
                                             </ul>
                                                                                  </div> -->
                                            <div id="slider" class="flexslider">
                                                <ul class="slides">
                                                    <li>
                                                        <img src="/images/products/our_location_370x370/{{$product->image}}"
                                                             alt="">
                                                    </li>
                                                    @foreach($product->images as $image)
                                                    <li>
                                                        <img src="/images/products/our_location_370x370/{{$image->image}}"
                                                             alt="">
                                                    </li>
                                                    @endforeach
                                                    <!-- items mirrored twice, total of 12 -->
                                                </ul>
                                            </div>
                                            <div id="carousel" class="flexslider">
                                                <ul class="slides">
                                                    <li>
                                                        <img src="/images/products/our_location_370x370/{{$product->image}}"
                                                             alt="">
                                                    </li>
                                                    @foreach($product->images as $image)
                                                    <li>
                                                        <img src="/images/products/our_location_370x370/{{$image->image}}" alt="">
                                                    </li>
                                                    @endforeach

                                                    <!-- items mirrored twice, total of 12 -->
                                                </ul>
                                            </div>
                                        </article>
                                    </div>
                                    <!-- Item Content -->
                                    <div class="col-xs-7">
                                        <span class="tags">{{$product->sub_category->category->name}}</span>
                                        <h5>{{$product->name}}</h5>
                                        <p class="rev">
                                            <span class="tour-price-single animated growIn slower" style="color: #FDC600">
                                                @for ($k=1; $k <= 5 ; $k++)
                                                    <span data-title="Average Rate: 5 / 5"
                                                          class="bottom-ratings tip">
                                                        <span class="glyphicon glyphicon-star{{ ($k <= $product->rating) ? '' : '-empty'}}"
                                                        style="font-size: 15px"></span>
                                                    </span>
                                                @endfor
                                                ({{$product->rating}})
                                            </span>
                                            <span class="margin-left-10">{{$product->reviews->count()}} Review(s)</span></p>
                                        <div class="row">
                                            <div class="col-sm-6"><span class="price">
                                                    UGX {{number_format($product->price)}} </span></div>
                                            <div class="col-sm-6">
                                                <p>Availability:
                                                    @if(($product->status)==0)
                                                    <span class="text-danger">Out of stock</span>
                                                    @else
                                                    <span class="in-stock">In stock</span>
                                                    @endif
                                                </p>

                                            </div>
                                        </div>
                                        <!-- List Details -->
                                        <ul class="bullet-round-list">
                                            <h6>Product Features</h6>
                                            @foreach($product->features as $features)
                                            <li>{{$features->title}}</li>
                                            @endforeach
                                        </ul>
                                        <?php
                                            $color_data = $product->colors;
                                            $colors = explode(',', $color_data);

                                            $size_data = $product->sizes;
                                            $sizes = explode(',', $size_data);
                                        ?>
                                        <!-- Colors -->
                                        <div class="row">
                                            <div class="col-xs-5">
                                                <div class="clr">
                                                    @foreach($colors as $color)
                                                        <span style="background:{{$color}}"></span>
                                                    @endforeach
                                                </div>
                                            </div>
                                            <!-- Sizes -->
                                            <div class="col-xs-7">
                                                <div class="sizes">
                                                    @foreach($sizes as $size)
                                                        <a href="#">{{$size}}</a>
                                                    @endforeach
                                                </div>
                                        </div>
                                        <!-- Compare Wishlist -->
                                        <ul class="cmp-list pull-left">
                                            <li>
                                                <form action="{{ route('saveForLater.store') }}" method="POST">
                                                    {{ csrf_field() }}
                                                    <input type="hidden" name="id" value="{{ $product->id }}">
                                                    <input type="hidden" name="name" value="{{ $product->name }}">
                                                    <input type="hidden" name="price" value="{{ $product->price }}">
                                                    <button type="submit" class="btn-sm btn-success">
                                                        <i class="fa fa-heart"></i>Add to Wishlist</button>
                                                </form>
                                            </li>
                                            <li class="social-top">
                                                <a href="https://www.facebook.com/sharer.php?u={{Request::url()}}"
                                                target="_blank"><i class="fa fa-facebook"></i></a>
                                                <a href="https://twitter.com/intent/tweet?url={{Request::url()}}"
                                                target="_blank"><i class="fa fa-twitter"></i></a>
                                                <a href="https://www.linkedin.com/shareArticle?url={{Request::url()}}&title={{$product->name}}"
                                                target="_blank"><i class="fa fa-linkedin"></i></a>
                                                <a href="https://plus.google.com/share?url={{Request::url()}}"
                                                target="_blank"><i class="fa fa-google-plus"></i></a>
                                            </li>

                                            <form action="{{ route('cart.store') }}" method="POST">
                                                {{ csrf_field() }}
                                                <input type="hidden" name="id" value="{{ $product->id }}">
                                                <input type="hidden" name="name" value="{{ $product->name }}">
                                                <input type="hidden" name="price" value="{{ $product->price }}">
                                                <button type="submit" class="btn-round">
                                                    <i class="icon-basket-loaded"></i> Add to Cart</button>
                                            </form>
                                        @if(Auth::guard('user')->user())
                                            @if(Auth::guard('user')->user()->id==$product->user_id)
                                                <a href="{{route('product.edit',['id'=>$product->id])}}" class="btn-round">
                                                    <i class="fa fa-edit margin-right-5">
                                                    </i> Edit Prodduct</a>
                                            @endif
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <!-- Details Tab Section-->
                            <div class="item-tabs-sec">
                                <!-- Nav tabs -->
                                <ul class="nav" role="tablist">
                                    <li role="presentation" class="active">
                                        <a href="Product-Details.html#pro-detil"  role="tab" data-toggle="tab">
                                            Product Details</a></li>
                                    <li role="presentation"><a href="Product-Details.html#cus-rev"
                                                               role="tab" data-toggle="tab">Customer Reviews</a></li>
                                    {{--<li role="presentation"><a href="Product-Details.html#ship"
                                                               role="tab" data-toggle="tab">Shipping & Payment</a></li>--}}
                                </ul>
                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane fade in active" id="pro-detil">
                                        <!-- List Details -->
                                        <ul class="bullet-round-list">
                                            {{$product->description}}
                                        </ul>

                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" id="cus-rev">
                                        <section class="testimonial-var-two animatedParent clearfix" style="background-color: white">
                                            <div class="container">
                                                <div class="row">
                                                    @foreach(App\Review::where('product_id', $product->id)->orderBy('created_at','DESC')->take(4)->get() as $reviews)
                                                        <div class="col-sm-4">
                                                            <article class="testimonial var-two animated fadeInLeftShort clearfix">
                                                                <figure class="avatar">
                                                                    <img src="/images/users/contact_user_74x74/{{$reviews->user->image}}" alt="avatar"/>
                                                                </figure>
                                                                <div class="contents">
                                                                    <p>“{{$reviews->review}}” </p>
                                                                    <cite class="fn">-
                                                                        <strong>{{$reviews->user->name}}</strong></cite>
                                                                </div>
                                                            </article>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </section>
                                        @if(Auth::guard('user')->check())
                                        <form method="post" action="{{route('user.review.submit')}}">
                                            {{ csrf_field() }}
                                            <input type="hidden" name="product_id" value="{{ $product->id }}">

                                            <div class="row" style="padding-left:15px;">
                                                <div class="col-sm-8 col-xs-10">
                                                    <div class="range-advanced-main">
                                                        <div class="range-text">
                                                            <label><span class="range-title">Rate:</span></label>
                                                            {{Form::hidden('rating', null, array('id'=>'ratings-hidden'))}}
                                                            <div class="text-left">
                                                                <div class="stars starrr"></div>
                                                                <a href="#" class="btn btn-danger btn-sm" id="close-review-box"
                                                                   style="display:none; margin-right:10px;">
                                                                    <span class="glyphicon glyphicon-remove"></span>Cancel</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-8 col-xs-10">
                                                    <div class="form-group">
                                                        <label><span class="range-title">Review:</span></label>
                                                        <textarea class="form-control" name="review" rows="5"
                                                                  placeholder="Your review"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                &nbsp;&nbsp;&nbsp;
                                                <button type="submit" class="btn-round">submit review</button>
                                            </div>
                                        </form>
                                        @else
                                            <a href="{{route('user.login.register')}}">
                                                <p style="color: red;">Login to write a review for this product.</p>
                                            </a>
                                        @endif
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" id="ship"></div>
                                </div>
                            </div>
                        </div>
                        <!-- Related Products -->

                    </div>
                </div>
                </div>
            </div>
        </section>
        <section class="padding-top-30 padding-bottom-40">
            <div class="container">
            <!-- heading -->
            <div class="heading">
                <h2>Related Products</h2>
                <hr>
            </div>
        @if(sizeof($related_products)>0)
            <!-- Items Slider -->
                <div class="item-slide-4 with-nav">
                    <!-- Product -->
                    @foreach($related_products as $related)
                        <div class="product">
                            <article>
                                <img class="img-responsive"
                                     src="/images/products/our_location_370x370/{{$related->image}}" alt="" >
                                <!-- Content -->
                                <span class="tag">{{$related->sub_category->category->name}}</span>
                                <a href="{{route('product.details',['product_id' => $related->id])}}" class="tittle">
                                    {{$related->name}}</a>
                                <!-- Reviews -->
                                <p class="rev">
                                            <span class="tour-price-single animated growIn slower" style="color: #FDC600">
                                                @for ($k=1; $k <= 5 ; $k++)
                                                    <span data-title="Average Rate: 5 / 5"
                                                          class="bottom-ratings tip">
                                                        <span class="glyphicon glyphicon-star{{ ($k <= $related->rating) ? '' : '-empty'}}"
                                                              style="font-size: 15px"></span>
                                                    </span>
                                                @endfor
                                                ({{$related->rating}})
                                            </span>
                                </p>
                                <p class="text-danger">
                                    <span class="margin-left-10">{{$related->reviews->count()}} Review(s)</span></p>
                                <div class="price">UGX {{number_format($related->price)}} </div>
                                <form action="{{ route('cart.store') }}" method="POST">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="id" value="{{ $related->id }}">
                                    <input type="hidden" name="name" value="{{ $related->name }}">
                                    <input type="hidden" name="price" value="{{ $related->price }}">
                                    <button type="submit" class="cart-btn">
                                        <i class="icon-basket-loaded"></i></button>
                                </form>
                            </article>
                        </div>
                    @endforeach
                </div>
            @else
                <p>
                    No related products available!
                </p>
            @endif
            </div>
        </section>
        <!-- Your Recently Viewed Items -->
        <section class="padding-bottom-60">
            <div class="container">
                <!-- heading -->
                <div class="heading">
                    <h2>Your Mostly Viewed Items</h2>
                    <hr>
                </div>
            @if(sizeof($related_products)>0)
                <!-- Items Slider -->
                <div class="item-slide-5 with-nav">
                    <!-- Product -->
                    @foreach($most_viewed as $viewed)
                        <div class="product">
                            <article>
                                <img class="img-responsive"
                                     src="/images/products/our_location_370x370/{{$viewed->image}}" alt="" >
                                <!-- Content -->
                                <span class="tag">{{$viewed->sub_category->category->name}}</span>
                                <a href="{{route('product.details',['product_id' => $viewed->id])}}" class="tittle">
                                    {{$viewed->name}}</a>
                                <!-- Reviews -->
                                <p class="rev">
                                            <span class="tour-price-single animated growIn slower" style="color: #FDC600">
                                                @for ($k=1; $k <= 5 ; $k++)
                                                    <span data-title="Average Rate: 5 / 5"
                                                          class="bottom-ratings tip">
                                                        <span class="glyphicon glyphicon-star{{ ($k <= $viewed->rating) ? '' : '-empty'}}"
                                                              style="font-size: 15px"></span>
                                                    </span>
                                                @endfor
                                                ({{$viewed->rating}})
                                            </span>
                                </p>
                                <p class="text-danger">
                                    <span class="margin-left-10 ">{{$viewed->reviews->count()}} Review(s)</span></p>
                                <div class="price">UGX {{number_format($viewed->price)}} </div>
                                <form action="{{ route('cart.store') }}" method="POST">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="id" value="{{ $viewed->id }}">
                                    <input type="hidden" name="name" value="{{ $viewed->name }}">
                                    <input type="hidden" name="price" value="{{ $viewed->price }}">
                                    <button type="submit" class="cart-btn">
                                        <i class="icon-basket-loaded"></i></button>
                                </form>
                            </article>
                        </div>
                    @endforeach
                    <!-- Product -->

                </div>
                @else
                    <p>
                        No products available!
                    </p>
                @endif
            </div>
        </section>

    </div>
    <!-- End Content -->
@endsection