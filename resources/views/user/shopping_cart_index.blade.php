
@extends('...layouts.user_layout')
@section('title')
    <title>Mr.Gift-Online - Shopping-Cart</title>
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
                    <!-- Step 1 -->
                    <li class="col-sm-3 current">
                        <div class="media-left"> <i class="flaticon-shopping"></i> </div>
                        <div class="media-body"> <span>Step 1</span>
                            <h6>Shopping Cart</h6>
                        </div>
                    </li>

                    <!-- Step 2 -->
                    <li class="col-sm-3">
                        <div class="media-left"> <i class="flaticon-business"></i> </div>
                        <div class="media-body"> <span>Step 2</span>
                            <h6>Payment Methods</h6>
                        </div>
                    </li>

                    <!-- Step 3 -->
                    <li class="col-sm-3">
                        <div class="media-left"> <i class="flaticon-delivery-truck"></i> </div>
                        <div class="media-body"> <span>Step 3</span>
                            <h6>Delivery Methods</h6>
                        </div>
                    </li>

                    <!-- Step 4 -->
                    <li class="col-sm-3">
                        <div class="media-left"> <i class="fa fa-check"></i> </div>
                        <div class="media-body"> <span>Step 4</span>
                            <h6>Confirmation</h6>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Shopping Cart -->
        <section class="shopping-cart padding-bottom-60">
            <div class="container">
                @if (Cart::count() > 0)
                    <h5><b>{{ Cart::count() }} item(s) in Shopping Cart</b></h5>
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
                        @foreach (Cart::content() as $product)
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
                                <td class="text-center padding-top-60"><!-- Quinty -->
                                    <select class="quantity" data-id="{{ $product->rowId }}">
                                        @for ($i = 1; $i < 5 + 1 ; $i++)
                                            <option {{ $product->qty == $i ? 'selected' : '' }}>{{ $i }}</option>
                                        @endfor
                                    </select>
                                </td>
                                <td class="text-center padding-top-60">
                                    UGX {{ number_format($product->qty*$product->model->price)}}</td>
                                <td class="text-center padding-top-60">
                                    <form action="{{ route('cart.destroy', $product->rowId) }}" method="POST">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                        <button type="submit" class="btn-sm btn-danger">
                                            <i class="fa fa-trash-o"></i> Remove
                                        </button>
                                    </form>
                                    <form action="{{ route('cart.switchToSaveForLater', $product->rowId) }}" method="POST">
                                    {{ csrf_field() }}
                                        <button type="submit" class="btn-sm btn-success">
                                            <i class="fa fa-heart"></i> Wishlist</button>
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
                    <a href="{{ route('checkout.index') }}" class="btn-round">Proceed to Checkout</a>
                </div>
                @else

                    <h3 class="text-center">No items in Cart!</h3>
                    <div class="spacer"></div>
                    <div class="pro-btn padding-bottom-20 padding-top-20">
                        <a href="{{ route('home') }}" class="btn-round" style="background-color: #b74368">
                            Continue Shopping</a>
                    </div>
                    <div class="spacer"></div>

                @endif
            </div>
        </section>


    </div>
    <!-- End Content -->

    <script src="{{ asset('js/app.js') }}"></script>
    <script>
        (function(){
            const classname = document.querySelectorAll('.quantity')

            Array.from(classname).forEach(function(element) {
                element.addEventListener('change', function() {
                    const id = element.getAttribute('data-id')
                    axios.patch(`/cart/${id}`, {
                        quantity: this.value
                    })
                        .then(function (response) {
                            // console.log(response);
                            window.location.href = '{{ route('product.shoppingCart') }}'
                        })
                        .catch(function (error) {
                            // console.log(error);
                            window.location.href = '{{ route('product.shoppingCart') }}'
                        });
                })
            })
        })();
    </script>

    <!-- Include AlgoliaSearch JS Client and autocomplete.js library -->
    <script src="https://cdn.jsdelivr.net/algoliasearch/3/algoliasearch.min.js"></script>
    <script src="https://cdn.jsdelivr.net/autocomplete.js/0/autocomplete.min.js"></script>
    <script src="{{ asset('js/algolia.js') }}"></script>

@endsection