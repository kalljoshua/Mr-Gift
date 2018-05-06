@extends('...layouts.admin_layout')
@section('title')
    <title>::Mr.Gifa fa-Admin::Promotional Advert</title>
@endsection

@section('content')
    @include('flash::message')
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2">
                    <h3 class="content-header-title mb-0">Promotional Advert</h3>
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">Advert</a>
                                </li>
                                <li class="breadcrumb-item active">Promotional Advert
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
                                    <h4 class="card-title">Promotional Advert</h4>
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
                                                <th>Title</th>
                                                <th>Date</th>
                                                <th>Product</th>
                                                <th>Offer</th>
                                                <th>Price</th>
                                                <th>Activate</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($banners as $banner)
                                                <tr>
                                                    <td>{{$banner->title}}</td>
                                                    <td>{{$banner->created_at->diffForHumans()}}</td>
                                                    <td>{{$banner->product->name}}</td>
                                                    <td>{{$banner->offer}}</td>
                                                    <td>Ugx {{number_format($banner->price)}}</td>
                                                    <td>
                                                        <label class="switch">
                                                            <input type="checkbox" id="banner-show-check{{$banner->id}}"
                                                                   data-property-id="{{$banner->id}}"
                                                                   onchange="showInBanner({{$banner->id}});">
                                                            <div class="slider"></div>
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <a href="{{ route('admin.edit.banner.form',['id'=>$banner->id])}}"
                                                           class="btn-sm btn-default btn-xs" data-toggle="tooltip" data-placement="top"
                                                           title="Edit"><i class="fa fa-pencil"></i></a>
                                                        <a href="{{route('admin.banner.delete',['id'=>$banner->id])}}"
                                                           class="btn-sm btn-danger btn-xs" data-toggle="tooltip" data-placement="top"
                                                           title="Delete"><i
                                                                    class="fa fa-times"></i></a>
                                                    </td>

                                                </tr>
                                            @endforeach
                                            </tbody>
                                            <tfoot>
                                            <tr>
                                                <th>Title</th>
                                                <th>Date</th>
                                                <th>Product</th>
                                                <th>Offer</th>
                                                <th>Price</th>
                                                <th>Activate</th>
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