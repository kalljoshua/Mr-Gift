
@extends('...layouts.user_layout')
@section('title')
    <title>::Mr.Gift:: My Orders</title>
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

                        <!-- Short List -->
                        <div class="short-lst">
                            <h2>My Products</h2>
                            <ul>
                                <!-- Short List -->
                                <li>
                                    <p>Showing 1–12 of 756 results</p>
                                </li>
                                <!-- Short  -->
                                <li >
                                    <select class="selectpicker">
                                        <option>Show 12 </option>
                                        <option>Show 24 </option>
                                        <option>Show 32 </option>
                                    </select>
                                </li>
                                <!-- by Default -->
                                <li>
                                    <select class="selectpicker">
                                        <option>Sort by Default </option>
                                        <option>Low to High </option>
                                        <option>High to Low </option>
                                    </select>
                                </li>

                                <!-- Grid Layer -->
                                <li class="grid-layer"> <a href="GridProducts_3Columns.html#."><i class="fa fa-list margin-right-10"></i></a> <a href="GridProducts_3Columns.html#." class="active"><i class="fa fa-th"></i></a> </li>
                                <li>
                                    <!-- Columns -->
                                    <select class="selectpicker">
                                        <option>3 Columns </option>
                                        <option>4 Columns </option>
                                        <option>5 Columns</option>
                                    </select>
                                </li>
                            </ul>
                        </div>
                        @foreach($products as $product)
                        <!-- Items -->
                        <div class="item-col-3">
                            <!-- Product -->

                                <div class="product">
                                    <article> <img class="img-responsive" src="/client_inc/images/item-img-1-1.jpg" alt="" >
                                        <span class="sale-tag">-25%</span>

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
                                        <p class="text-danger">
                                            <span class="margin-left-10">{{$product->reviews->count()}} Review(s)</span>
                                        </p>
                                        <div class="price">UGX {{$product->price}}
                                            <span>$200.00</span></div>
                                        <a href="GridProducts_3Columns.html#." class="cart-btn"><i class="icon-basket-loaded"></i>
                                        </a> </article>
                                </div>


                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Your Recently Viewed Items -->
        <section class="padding-bottom-60">
            <div class="container">

                <!-- heading -->
                <div class="heading">
                    <h2>Your Most Viewed Items</h2>
                    <hr>
                </div>
                <!-- Items Slider -->
                <div class="item-slide-5 with-nav">
                    <!-- Product -->
                    @foreach($most_viewed as $viewed)
                        <div class="product">
                            <article>
                                <img class="img-responsive" src="/client_inc/images/item-img-1-1.jpg" alt="" >
                                <!-- Content -->
                                <span class="tag">{{$viewed->sub_category->category->name}}</span>
                                <a href="Product-Details.html#." class="tittle">
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
                                    <span class="margin-left-10">{{$viewed->reviews->count()}} Review(s)</span></p>
                                <div class="price">UGX {{$viewed->price}} </div>
                                <a href="Product-Details.html#." class="cart-btn"><i class="icon-basket-loaded"></i></a>
                            </article>
                        </div>
                @endforeach
                <!-- Product -->
                </div>
            </div>
        </section>

    </div>
    <!-- End Content -->

@endsection