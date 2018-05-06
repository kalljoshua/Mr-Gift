
@extends('...layouts.user_layout')
@section('title')
    <title>Mr.Gift-Online - Wishlist</title>
@endsection

@section('content')

    <!-- Content -->
    <div id="content">

        <!-- Ship Process -->
        <div class="ship-process padding-top-30 padding-bottom-30">
            <div class="container">
                <ul class="row">
                    @if (session()->has('success_message'))
                        <div class="alert alerts alert-success">
                            {{ session()->get('success_message') }}
                        </div>
                    @endif

                    @if(count($errors) > 0)
                        <div class="alert alerts alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                @endif
                </ul>
            </div>
        </div>

        <!-- Shopping Cart -->
        <section class="shopping-cart padding-bottom-60">
            <div class="container">
                @if (Cart::instance('saveForLater')->count() > 0)
                    <h5><b>{{ Cart::instance('saveForLater')->count() }} item(s) in your wishlist</b></h5>
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
                        @foreach (Cart::instance('saveForLater')->content() as $product)
                            <tr>
                                <td><div class="media">
                                        <div class="media-left">
                                            <a href="{{route('product.details',['product_id' => $product->model->id])}}">
                                                <img class="img-responsive"
                                                     src="/images/products/our_location_370x370/{{$product->model->image}}" alt="" >
                                            </a>
                                        </div>
                                        <div class="media-body">
                                            <p>{{$product->model->name}}</p>
                                        </div>
                                    </div></td>
                                <td class="text-center padding-top-60">UGX {{number_format($product->model->price)}}</td>
                                <td class="text-center"><!-- Quinty -->

                                    <div class="quinty padding-top-20">
                                        <input type="number" value="02">
                                    </div></td>
                                <td class="text-center padding-top-60">UGX </td>
                                <td class="text-center padding-top-40">
                                    <form action="{{ route('saveForLater.destroy', $product->rowId) }}" method="POST">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                        <button type="submit" class="btn-sm btn-danger">
                                            <i class="fa fa-trash-o"></i> Remove
                                        </button>
                                    </form>
                                    <form action="{{ route('saveForLater.switchToCart', $product->rowId) }}" method="POST">
                                        {{ csrf_field() }}
                                        <button type="submit" class="btn-sm btn-success">
                                            <i class="icon-basket-loaded"></i> To Cart</button>
                                    </form>
                                </td>
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
                            <h5>Subtotal: <span>UGX {{ Cart::subtotal() }}</span></h5>
                            <h5>Transport: <span>UGX {{ Cart::tax() }}</span></h5>
                            <h5>Grand total: <span>UGX {{ Cart::total() }}</span></h5>
                        </div>
                    </div>

                    <!-- Button -->
                    <div class="pro-btn">
                        <a href="{{ route('home') }}" class="btn-round btn-light">
                            Continue Shopping</a>
                        <a href="ShoppingCart.html#." class="btn-round">Go Payment Methods</a>
                    </div>
                @else

                    <h3 class="text-center">No items in Wishlist!</h3>
                    <div class="spacer"></div>
                    <div class="pro-btn padding-bottom-20 padding-top-20">
                        <a href="{{ route('home') }}" class="btn-round btn-success">
                            Continue Shopping</a>
                    </div>
                    <div class="spacer"></div>

                @endif
            </div>
        </section>


    </div>
    <!-- End Content -->

@endsection