@extends('...layouts.admin_layout')
@section('title')
    <title>::Mr.Gift-Admin::Product Requests</title>
@endsection

@section('content')
    <div class="app-content content">
        <div class="content-wrapper">

            @include('flash::message')

            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2">
                    <h3 class="content-header-title mb-0">Product Requests</h3>
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">Product</a>
                                </li>
                                <li class="breadcrumb-item active">Product Requests
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
                                    <h4 class="card-title">Product Requests</h4>
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
                                                <th>Requested</th>
                                                <th>Full Name</th>
                                                <th>Phone Number</th>
                                                <th>Delivery Address</th>
                                                <th>Delivery date</th>
                                                <th>Occasion</th>
                                                <th>Gender</th>
                                                <th>Recipient Age</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($requests as $request)
                                                <tr>
                                                    <td><i class="fa fa-clock-o"></i>
                                                        {{$request->created_at->diffForHumans()}}
                                                    </td>
                                                    <td>
                                                        {{$request->name}}
                                                    </td>
                                                    <td>{{$request->contact}}</td>
                                                    <td>{{$request->address}}</td>
                                                    <td>
                                                        {{$request->date}}
                                                    </td>
                                                    <td>
                                                        {{$request->occasion}}
                                                    </td>
                                                    <td>{{$request->gender}}</td>
                                                    <td>{{$request->age}}</td>

                                                </tr>

                                            @endforeach
                                            </tbody>
                                            <tfoot>
                                            <tr>
                                                <th>Requested</th>
                                                <th>Full Name</th>
                                                <th>Phone Number</th>
                                                <th>Delivery Address</th>
                                                <th>Delivery date</th>
                                                <th>Occasion</th>
                                                <th>Gender</th>
                                                <th>Recipient Age</th>
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