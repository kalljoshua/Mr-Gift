@extends('...layouts.admin_layout')
@section('title')
    <title>::Mr.Gift-Admin::Products Sales</title>
@endsection

@section('content')
    @include('flash::message')
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2">
                    <h3 class="content-header-title mb-0">Product Sales</h3>
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">Sales</a>
                                </li>
                                <li class="breadcrumb-item active">Product Sales
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>

            </div>

            <div class="content-body"><!-- HTML5 export buttons table -->
                <!-- Column selectors table -->
                <section id="column-selectors">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Product Sales</h4>
                                    <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <ul class="list-inline mb-0">
                                            <li><a data-action="collapse"><i class="fa fa-minus"></i></a></li>
                                            <li><a data-action="reload"><i class="fa fa-refresh"></i></a></li>
                                            <li><a data-action="expand"><i class="fa fa-window-maximize"></i></a></li>
                                            <li><a data-action="close"><i class="fa fa-close"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-content collapse show">
                                    <div class="card-body card-dashboard">
                                        <table class="table table-striped table-bordered dataex-html5-selectors">
                                            <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Quantity</th>
                                                <th>Price</th>
                                                <th>Date</th>
                                                <th>Total Price</th>
                                                <th>Customer</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($sales as $sale)
                                                @foreach($sale->cart->items as $item)
                                                <tr>
                                                    <td>{{$item['item']['name']}}</td>
                                                    <td>{{$item['qty']}}</td>
                                                    <td>Ugx {{number_format($item['item']['price'])}}</td>
                                                    <td>{{$sale->created_at->diffForHumans()}}</td>
                                                    <td>{{number_format($item['price'])}}</td>
                                                    <td>{{$sale->user->name}}</td>
                                                </tr>
                                                @endforeach
                                            @endforeach
                                            </tbody>
                                            <tfoot>
                                            <tr>
                                                <th>Name</th>
                                                <th>Quantity</th>
                                                <th>Price</th>
                                                <th>Date</th>
                                                <th>Total Price</th>
                                                <th>Customer</th>
                                            </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--/ Column selectors table -->

            </div>
        </div>
    </div>

@endsection