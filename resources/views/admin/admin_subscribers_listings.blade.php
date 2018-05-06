@extends('...layouts.admin_layout')
@section('title')
    <title>::Mr.Gift-Admin::Newsletter Subscribers</title>
@endsection

@section('content')
    <div class="app-content content">
        <div class="content-wrapper">

            @include('flash::message')

            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2">
                    <h3 class="content-header-title mb-0">Newsletter Subscribers</h3>
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">Newsletter</a>
                                </li>
                                <li class="breadcrumb-item active">Newsletter Subscribers
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
                                    <h4 class="card-title">Newsletter Subscribers</h4>
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
                                                <th>ID</th>
                                                <th>Date</th>
                                                <th>Email</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php $i = 1; ?>
                                            @foreach($subscribers as $subscriber)
                                                <tr>
                                                    <td>
                                                        {{$i}}
                                                    </td>
                                                    <td>
                                                        {{$subscriber->created_at->diffForHumans()}}
                                                    </td>
                                                    <td>
                                                        {{$subscriber->email}}
                                                    </td>
                                                    <td>
                                                        <a href="#"
                                                           class="btn-sm btn-danger btn-xs" data-toggle="tooltip" data-placement="top"
                                                           title="Delete"><i
                                                                    class="fa fa-times"></i></a>
                                                    </td>
                                                </tr>
                                                <?php $i = $i+1; ?>
                                            @endforeach
                                            </tbody>
                                            <tfoot>
                                            <tr>
                                                <th>ID</th>
                                                <th>Date</th>
                                                <th>Email</th>
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