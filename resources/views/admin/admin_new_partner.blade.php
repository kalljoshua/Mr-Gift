@extends('...layouts.admin_layout')
@section('title')
    <title>::Mr.Gift-Admin::New Sponsor</title>
@endsection

@section('content')
    <div class="app-content content">
        <div class="content-wrapper">

            @include('flash::message')

            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2">
                    <h3 class="content-header-title mb-0">New Sponsor</h3>
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">Sponsors</a>
                                </li>
                                <li class="breadcrumb-item active">New Sponsor
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>

            </div>

            <div class="content-body"><!-- HTML5 export buttons table -->
                <!-- Column selectors table -->
                <section id="horizontal-form-layouts">

                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title" id="horz-layout-basic">Create New Sponsor</h4>
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
                                <div class="card-content collpase show">
                                    <div class="card-body">

                                        <form class="form form-horizontal" role="form"
                                              action="{{route('admin.sponsors.new.submit')}}" method="post"
                                              enctype="multipart/form-data">
                                            {{csrf_field()}}
                                            <div class="form-body">
                                                <h4 class="form-section"><i class="fa fa-rss-square"></i> New Sponsor Info</h4>
                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="projectinput1">Name</label>
                                                    <div class="col-md-9">
                                                        <input type="text" class="form-control" placeholder="Name" name="name">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="projectinput2">Website</label>
                                                    <div class="col-md-9">
                                                        <input type="text" class="form-control"
                                                               placeholder="http://..." name="website">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control">Select File</label>
                                                    <div class="col-md-9">
                                                        <label id="projectinput8" class="file center-block">
                                                            <input type="file" id="file" name="photo">
                                                            <span class="file-custom"></span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-actions pull-right">
                                                <button type="submit" class="btn btn-primary">
                                                    <i class="fa fa-check-square-o"></i> Submit Post
                                                </button>
                                            </div>
                                        </form>
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