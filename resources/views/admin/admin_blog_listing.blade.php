@extends('...layouts.admin_layout')
@section('title')
    <title>::Mr.Gift-Admin::Blog Listings</title>
@endsection

@section('content')
    <div class="app-content content">
        <div class="content-wrapper">

            @include('flash::message')

            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2">
                    <h3 class="content-header-title mb-0">Blog Listingss</h3>
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">Blog</a>
                                </li>
                                <li class="breadcrumb-item active">Blog Listings
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
                                    <h4 class="card-title">Blog Listings</h4>
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
                                                <th>Date</th>
                                                <th>Image</th>
                                                <th>Name</th>
                                                <th>Body</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($posts as $post)
                                                <tr>
                                                    <td><i class="fa fa-clock-o"></i>
                                                        {{$post->created_at->diffForHumans()}}
                                                    </td>
                                                    <td>
                                                        <img src="/images/blog/admin_listing_99x99/{{$post->image}}"
                                                             width="40" class="img-circle" />
                                                    </td>
                                                    <td>{{$post->title}}</td>
                                                    <td>{!! str_limit($post->body, $limit = 40, $end = '...') !!}</td>

                                                    <td>
                                                        @if($post->active == 0)
                                                            <span class="label label-warning">Not active</span>
                                                        @endif
                                                        @if($post->active == 1)
                                                            <span class="label label-success">active</span>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        <a href="{{ route('admin.post.edit.form',['id'=>$post->id])}}"
                                                           class="btn-sm btn-default btn-xs" data-toggle="tooltip" data-placement="top"
                                                           title="Edit"><i class="fa fa-pencil"></i></a>
                                                        <a href="{{route('admin.post.delete',['id'=>$post->id])}}"
                                                           class="btn-sm btn-danger btn-xs" data-toggle="tooltip" data-placement="top"
                                                           title="Delete"><i
                                                                    class="fa fa-times"></i></a>
                                                    </td>
                                                </tr>

                                            @endforeach
                                            </tbody>
                                            <tfoot>
                                            <tr>
                                                <th>Date</th>
                                                <th>Image</th>
                                                <th>Name</th>
                                                <th>Body</th>
                                                <th>Status</th>
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