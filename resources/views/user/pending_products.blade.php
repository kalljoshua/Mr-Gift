
@extends('...layouts.user_layout')
@section('title')
    <title>::Mr.Gift:: My Products</title>
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
                            <h2>My Pending Products</h2>
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
                                <li class="grid-layer"> <a href="#">
                                        <i class="fa fa-list margin-right-10"></i></a>
                                    <a href="#" class="active">
                                        <i class="fa fa-th"></i></a> </li>
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

                        <!-- Items -->
                        <div class="item-col-3">
                            <!-- Product -->
                            @foreach($products as $product)
                                <div class="product">
                                    <article> <img class="img-responsive"
                                                   src="/images/products/service_listing_364x244/{{$product->image}}" alt="" >
                                        <span class="sale-tag">Pending</span>

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
                                        <div class="price">UGX {{$product->price}}</div>
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

                        <!-- pagination -->
                            <ul class="pagination">
                                <?php echo $products->render(); ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
    @endsection