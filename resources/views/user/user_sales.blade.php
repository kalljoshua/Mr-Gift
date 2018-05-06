
@extends('layouts.user_layout')
@section('title')
    <title>::Mr.Gift:: User Products Sales</title>
@endsection

@section('content')

    <!-- Content -->
    <div id="content">

        <div class="linking">
            <div class="container">
                <ol class="breadcrumb">
                    <li><a href="/">Home</a></li>
                    <li class="active">User Sales</li>
                </ol>
            </div>
        </div>

        <!-- Products -->
        <section class="padding-top-40 padding-bottom-60">
            <div class="container">
                <div class="row">

                    <!-- Shop Side Bar -->
                @include('user.left_menu')

                <!-- Products -->
                    <div class="col-md-9">
                        <div class="heading">
                            <h2>User Sales</h2>
                        </div>
                        @foreach($sales as $sale)
                        <div class="panel-group">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" href="#collapse{{$sale->id}}">
                                            <ul class="row check-item">
                                                <p class="col-xs-2">
                                                    {{$sale->created_at->diffForHumans()}}
                                                </p>
                                                <p class="col-xs-3 text-center">
                                                    Subtotal: UGX {{$sale->subtotal}}
                                                </p>
                                                <p class="col-xs-3 text-center">
                                                    Transport: UGX {{$sale->transport}}
                                                </p>
                                                <p class="col-xs-3 text-center">
                                                    Total: UGX {{$sale->total}}
                                                </p>
                                            </ul>
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapse{{$sale->id}}" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <div class="card-body card-dashboard">
                                            <table class="table table-striped table-bordered dataex-html5-selectors">

                                                <tbody>
                                                    @foreach($sale->products as $item)
                                                        <tr>
                                                            <td>
                                                                <div class="media-left">
                                                                    <a href="{{route('product.details',['product_id' => $item->id])}}">
                                                                        <img class="img-responsive"
                                                                             src="/images/products/latest_reviews_50x50/{{$item->image}}" alt="" >
                                                                    </a>
                                                                </div>
                                                            </td>
                                                            <td>{{$item->name}}</td>
                                                            <td>{{$item->pivot->quantity}}</td>
                                                            <td>Ugx {{number_format($item->price)}}</td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="panel-footer"></div>
                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </section>



    </div>
    <!-- End Content -->

@endsection