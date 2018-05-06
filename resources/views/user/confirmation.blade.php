
@extends('...layouts.user_layout')
@section('title')
    <title>::Mr.Gift::Thank You</title>
@endsection

@section('content')


<div id="content">

    <!-- Ship Process -->
    <div class="ship-process padding-top-30 padding-bottom-30">
        <div class="container">
            <ul class="row">

                <!-- Step 1 -->
                <li class="col-sm-3">
                    <div class="media-left"> <i class="fa fa-check"></i> </div>
                    <div class="media-body"> <span>Step 1</span>
                        <h6>Shopping Cart</h6>
                    </div>
                </li>

                <!-- Step 2 -->
                <li class="col-sm-3">
                    <div class="media-left"> <i class="fa fa-check"></i> </div>
                    <div class="media-body"> <span>Step 2</span>
                        <h6>Payment Methods</h6>
                    </div>
                </li>

                <!-- Step 3 -->
                <li class="col-sm-3">
                    <div class="media-left"> <i class="fa fa-check"></i> </div>
                    <div class="media-body"> <span>Step 3</span>
                        <h6>Delivery Methods</h6>
                    </div>
                </li>

                <!-- Step 4 -->
                <li class="col-sm-3 current">
                    <div class="media-left"> <i class="fa fa-check"></i> </div>
                    <div class="media-body"> <span>Step 4</span>
                        <h6>Confirmation</h6>
                    </div>
                </li>
            </ul>
        </div>
    </div>

    <!-- Payout Method -->
    <section class="padding-bottom-60">
        <div class="container">

            @if (session()->has('success_message'))
                <div class="spacer"></div>
                <div class="alert alert-success">
                    {{ session()->get('success_message') }}
                </div>
            @endif

            @if(count($errors) > 0)
                <div class="spacer"></div>
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{!! $error !!}</li>
                        @endforeach
                    </ul>
                </div>
        @endif

            <!-- Payout Method -->
            <div class="pay-method check-out">

                <!-- Shopping Cart -->
                <div class="heading">
                    <h2>Shopping Cart</h2>
                    <hr>
                </div>
                @foreach($order->products as $product)
                <!-- Check Item List -->
                <ul class="row check-item">
                    <li class="col-xs-6">
                        <p>{{$product->name}}</p>
                    </li>
                    <li class="col-xs-2 text-center">
                        <p>UGX {{number_format($product->price)}}</p>
                    </li>
                    <li class="col-xs-2 text-center">
                        <p>{{$product->pivot->quantity}} Items</p>
                    </li>
                    <?php
                    $price = str_replace(',', '',$product->price);
                    ?>
                    <li class="col-xs-2 text-center">
                        <p>UGX {{number_format($product->pivot->quantity * $price)}}</p>
                    </li>
                </ul>
                @endforeach

                <!-- Payment information -->
                <div class="heading margin-top-50">
                    <h2>Payment information</h2>
                    <hr>
                </div>

                <!-- Check Item List -->
                <ul class="row check-item">
                    <li class="col-xs-6">
                        <p><img class="margin-right-20" src="images/visa-card.jpg" alt=""> Visa Credit Card</p>
                    </li>
                    <li class="col-xs-6 text-center">
                        <p>Payment Method:   {{$order->payment_getway}}</p>
                    </li>
                </ul>

                <!-- Delivery infomation -->
                <div class="heading margin-top-50">
                    <h2>Delivery infomation</h2>
                    <hr>
                </div>

                <!-- Information -->
                <ul class="row check-item infoma">
                    <li class="col-sm-3">
                        <h6>Name</h6>
                        <span>{{$order->user->name}}</span> </li>
                    <li class="col-sm-3">
                        <h6>Phone</h6>
                        <span>{{$order->user->phone}}</span> </li>
                    <li class="col-sm-3">
                        <h6>Email</h6>
                        <span>{{$order->user->email}}</span> </li>
                    <li class="col-sm-3">
                        <h6>City</h6>
                        <span>{{$order->city}}</span> </li>
                    <li class="col-sm-3">
                        <h6>Address</h6>
                        <span>{{$order->address}}</span> </li>
                </ul>

                <!-- Information -->
                <ul class="row check-item infoma exp">
                    <li class="col-sm-6"> <span>Expert Delivery</span> </li>
                    <li class="col-sm-3">
                        <h6>24 - 48 hours</h6>
                    </li>
                    <li class="col-sm-3">
                        <h5>+25</h5>
                    </li>
                </ul>

                <!-- Totel Price -->
                <div class="totel-price">
                    <h4><small> Total Price: </small>UGX {{$order->total}}</h4>
                </div>
            </div>

            <!-- Button -->
            <div class="pro-btn"> <a href="Confirmation.html#." class="btn-round btn-light">Back to Delivery</a> <a href="Confirmation.html#." class="btn-round">Proceed to Checkout</a> </div>
        </div>
    </section>

</div>
<!-- End Content -->
@endsection