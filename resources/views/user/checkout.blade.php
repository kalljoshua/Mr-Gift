@extends('...layouts.user_layout')
@section('title')
    <title>::Mr.Gift::Checkout</title>
@endsection

@section('content')
    <!-- Content -->
    <div id="content">

        <!-- Ship Process -->
        <div class="ship-process padding-top-30 padding-bottom-30">
            <div class="container">
                <ul class="row">

                    <!-- Step 1 -->
                    <li class="col-sm-6">
                        <div class="media-left"> <i class="flaticon-shopping"></i> </div>
                        <div class="media-body"> <span>First Step</span>
                            <h6>Shopping Cart</h6>
                        </div>
                    </li>



                    <!-- Step 4 -->
                    <li class="col-sm-6 current">
                        <div class="media-left"> <i class="fa fa-check"></i> </div>
                        <div class="media-body"> <span>Last Step</span>
                            <h6>Thank You</h6>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Payout Method -->
        <section class="padding-bottom-60">
            <div class="container">
                <!-- Payout Method -->

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

                <h2 class="checkout-heading stylish-heading">Checkout</h2>
                <div class="checkout-section">
                    <div class="col-md-6">
                        <form action="{{ route('checkout.store') }}" method="POST" id="payment-form">
                            {{ csrf_field() }}
                            <h5>Billing Details</h5>

                            <div class="form-group">
                                <label for="email">Email Address</label>
                                @if (Auth::guard('user')->user())
                                    <input type="email" class="form-control" id="email"
                                           name="email" value="{{ Auth::guard('user')->user()->email }}" readonly>
                                    <input name="user_id" value="{{ Auth::guard('user')->user()->id }}" type="hidden">
                                @else
                                    <input type="email" class="form-control" id="email"
                                           name="email" value="{{ old('email') }}" required>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="name">Name</label>
                                @if (Auth::guard('user')->user())
                                    <input type="text" class="form-control" id="name"
                                       name="name" value="{{ Auth::guard('user')->user()->name }}" required>
                                @else
                                    <input type="text" class="form-control" id="name"
                                           name="name" value="{{ old('name') }}" required>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="address">Address</label>
                                <input type="text" class="form-control" id="address" name="address"
                                       value="{{ old('address') }}" required>
                            </div>

                            <div class="half-form">
                                <div class="form-group">
                                    <label for="city">City</label>
                                    <input type="text" class="form-control" id="city" name="city"
                                           value="{{ old('city') }}" required>
                                    <input name="subtotal" value="{{ Cart::subtotal() }}" type="hidden">
                                    <input name="tax" value="{{ Cart::tax() }}" type="hidden">
                                    <input name="total" value="{{ Cart::total() }}" type="hidden">
                                </div>
                            </div> <!-- end half-form -->


                            <h6>Payment Details</h6>
                            <div class="form-group">
                                <input type="radio" name="getway" value="credit_card" id="myCheck"  onclick="myFunction()">
                                <img src="/client_inc/images/card-icon.png" alt="" >
                            </div>
                            <div class="form-group">
                                <input type="radio" name="getway" value="mobile_money" id="myCheck"  onclick="myFunction()">
                                <img style="height: 35px;" src="/client_inc/images/mobile.jpeg" alt="" >
                            </div>
                            <div class="form-group">
                                <input type="radio" name="getway" value="on_delivery" id="myCheck"  onclick="myFunction()">
                                <img style="height: 35px;" src="/client_inc/images/cash_on_delivery.png" alt="" >
                            </div>

                            <button type="submit" id="complete-order"
                                    class="btn-round" style="background-color: #b74368">Complete Order</button>


                        </form>
                    </div>


                    <div class="col-md-6">
                        <div class="checkout-table-container">
                            <h5>Your Order</h5>

                            <table class="table">
                                <thead>
                                <tr>
                                    <th>Items</th>
                                    <th class="text-center">Price</th>
                                    <th class="text-center">Quantity</th>
                                </tr>
                                </thead>
                                <tbody>

                                <!-- Item Cart -->
                                @foreach (Cart::content() as $product)
                                    <tr>
                                        <td><div class="media">
                                                <div class="media-left">
                                                    <a href="{{route('product.details',['product_id' => $product->model->id])}}">
                                                        <img style="width: 60px; height: 60px"
                                                             src="/images/products/our_location_370x370/{{$product->model->image}}" alt="" >
                                                    </a>
                                                </div>
                                                <div class="media-body">
                                                    <p>{{$product->model->name}}</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td style="width:30%">UGX {{number_format($product->model->price)}}</td>
                                        <td><!-- Quinty -->
                                            {{ $product->qty }}
                                        </td>

                                    </tr>
                                @endforeach

                                </tbody>
                                </table>
                            <hr>
                            <div class="promo pull-right col-md-6">
                                <!-- Grand total -->
                                <div class="pull-left padding-right-30">
                                    <h7><b>Subtotal:</b> </h7><br>
                                    <h7><b>Transport:</b> </h7><br>
                                    <h7><b>Grand total:</b> </h7><br>
                                </div>
                                <div class="pull-right">
                                    <span>UGX {{ Cart::subtotal() }}</span><br>
                                    <span>UGX {{ Cart::tax() }}</span><br>
                                    <span>UGX {{ Cart::total() }}</span><br>
                                </div>
                            </div>



                            </div>
                    </div>

                </div> <!-- end checkout-section -->
            </div>
        </section>


    </div>
    <!-- End Content -->


@endsection