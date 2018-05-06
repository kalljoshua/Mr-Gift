
@extends('...layouts.user_layout')
@section('title')
    <title>::Mr.Gift::Shopping-Cart</title>
@endsection

@section('content')

    <!-- Content -->
    <div id="content">

        <!-- Ship Process -->
        <div class="ship-process padding-top-30 padding-bottom-30">
            <div class="container">
                <ul class="row">

                    <!-- Step 1 -->
                    <li class="col-sm-6 current">
                        <div class="media-left"> <i class="flaticon-shopping"></i> </div>
                        <div class="media-body"> <span>Step 1</span>
                            <h6>Shopping Cart</h6>
                        </div>
                    </li>


                    <!-- Step 4 -->
                    <li class="col-sm-6">
                        <div class="media-left"> <i class="fa fa-check"></i> </div>
                        <div class="media-body"> <span>Step 2</span>
                            <h6>Thank You</h6>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Shopping Cart -->
        @if(Session::has('cart'))
        <section class="shopping-cart padding-bottom-60">
            <div class="container">

                <table class="table">
                    <thead>
                    <tr>
                        <th>Items</th>
                        <th class="text-center">Price</th>
                        <th class="text-center">Quantity</th>
                        <th class="text-center">Total Price </th>
                        <th>&nbsp; </th>
                    </tr>
                    </thead>
                    <tbody>

                    <!-- Item Cart -->
                    @foreach($products as $product)
                    
                    <tr>
                        <td><div class="media">
                                <div class="media-left"> <a href="ShoppingCart.html#.">
                                        <img class="img-responsive" src="/client_inc/images/item-img-1-2.jpg" alt="" > </a> </div>
                                <div class="media-body">
                                    <p>{{$product['item']['name']}}</p>
                                </div>
                            </div></td>
                        <td class="text-center padding-top-60">UGX {{number_format($product['item']['price'])}}</td>
                        <td class="text-center"><div class="quinty padding-top-20">
                                <input type="number" value="{{$product['qty']}}">
                            </div></td>
                        <td class="text-center padding-top-60">UGX {{number_format($product['price'])}}</td>
                        <td class="text-center padding-top-60"><a href="ShoppingCart.html#." class="remove">
                                <i class="fa fa-close"></i></a></td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>

                <!-- Promotion -->
                <div class="promo">
                    <div class="coupen">
                        <label> Promotion Code
                            <input type="text" placeholder="Your code here">
                            <button type="submit"><i class="fa fa-arrow-circle-right"></i></button>
                        </label>
                    </div>

                    <!-- Grand total -->
                    <div class="g-totel">
                        <h5>Grand total: <span>UGX {{number_format($totalPrice)}}</span></h5>
                    </div>
                </div>

                <!-- Button -->
                <div class="pro-btn">
                    <a href="ShoppingCart.html#." class="btn-round btn-light">Continue Shopping</a>
                    <a href="{{route('checkout')}}" class="btn-round">Checkout</a> </div>
            </div>
        </section>
        @else
            <section class="shopping-cart padding-bottom-60">
                <div class="container">
                    <h3>No Items in the Cart!</h3>
                </div>
            </section>


        @endif

        <!-- Clients img -->
        <section class="light-gry-bg clients-img">
            <div class="container">
                <ul>
                    <li><img src="images/c-img-1.png" alt="" ></li>
                    <li><img src="images/c-img-2.png" alt="" ></li>
                    <li><img src="images/c-img-3.png" alt="" ></li>
                    <li><img src="images/c-img-4.png" alt="" ></li>
                    <li><img src="images/c-img-5.png" alt="" ></li>
                </ul>
            </div>
        </section>

        <!-- Newslatter -->
        <section class="newslatter">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h3>Subscribe our Newsletter <span>Get <strong>25% Off</strong> first purchase!</span></h3>
                    </div>
                    <div class="col-md-6">
                        <form>
                            <input type="email" placeholder="Your email address here...">
                            <button type="submit">Subscribe!</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- End Content -->

@endsection