@extends('...layouts.admin_layout')
@section('title')
    <title>::Mr.Gift-Admin::Products</title>
@endsection

@section('content')
    @include('flash::message')
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2">
                    <h3 class="content-header-title mb-0">Product Listings</h3>
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">Products</a>
                                </li>
                                <li class="breadcrumb-item active">Product Listings
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
                                    <h4 class="card-title">Product Listings</h4>
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
                                                <th>category</th>
                                                <th>Feature</th>
                                                <th>Status</th>
                                                <th>Date</th>
                                                <th>Price</th>
                                                <th>Top Viewed</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($products as $product)
                                            <tr>
                                                <td>{{$product->name}}</td>
                                                <td>{{$product->sub_category->category->name}}</td>
                                                <td>
                                                    <label class="switch">
                                                        <input type="checkbox" id="rec-check-product{{$product->id}}"
                                                               data-property-id="{{$product->id}}"
                                                               onchange="recommendproduct({{$product->id}});">
                                                        <div class="slider round"></div>
                                                    </label>
                                                </td>

                                                <td>@if(($product->active)==0)
                                                        <span class="badge badge badge-warning badge-pill float-right mr-2">Pending</span>
                                                    @else
                                                        <span class="badge badge badge-primary badge-pill float-right mr-2">Approved</span>
                                                    @endif</td>
                                                <td>{{$product->created_at->diffForHumans()}}</td>
                                                <td>Ugx {{number_format($product->price)}}</td>
                                                <td>
                                                    <label class="switch">
                                                        <input type="checkbox" id="top-viewed-check{{$product->id}}"
                                                               data-property-id="{{$product->id}}"
                                                               onchange="topViewed({{$product->id}});">
                                                        <div class="slider round"></div>
                                                    </label>
                                                </td>
                                                <td>
                                                    <a href="#" data-toggle="modal" data-target="#large{{$product->id}}">
                                                        <i class="fa fa-eye"></i></a>
                                                    @if($product->user_type==1)
                                                    <a href="{{route('admin.product.edit',['id'=>$product->id])}}"
                                                       class="btn btn-info btn-xs" data-toggle="tooltip"
                                                       data-placement="top" title="View">
                                                        <i class="fa fa-edit"></i>
                                                    </a>
                                                    @endif


                                                </td>

                                            </tr>
                                            @include('admin.product_details')
                                            @endforeach
                                            </tbody>
                                            <tfoot>
                                            <tr>
                                                <th>Name</th>
                                                <th>category</th>
                                                <th>Feature</th>
                                                <th>Status</th>
                                                <th>Date</th>
                                                <th>Price</th>
                                                <th>Top Viewed</th>
                                                <th>Action</th>
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