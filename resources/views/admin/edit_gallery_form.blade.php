@extends('...layouts.admin_layout')
@section('title')
    <title>::Mr.Gifa fa-Admin::Edit Gallery</title>
@endsection

@section('content')
    <div class="app-content content">
        <div class="content-wrapper">

            @include('flash::message')

            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2">
                    <h3 class="content-header-title mb-0">Edit Gallery</h3>
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">Gallery</a>
                                </li>
                                <li class="breadcrumb-item active">Edit Gallery
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
                                    <h4 class="card-title" id="horz-layout-basic">Edit Gallery</h4>
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
                                              action="{{route('admin.gallery.edit.submit')}}" method="post"
                                              enctype="multipart/form-data">
                                            {{csrf_field()}}
                                            <div class="form-body">
                                                <h4 class="form-section"><i class="fa fa-photo"></i> Gallery Info</h4>
                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="projectinput1">Title</label>
                                                    <div class="col-md-9">
                                                        <input type="text" id="projectinput1" class="form-control"
                                                               value="{{$gallery->title}}" name="title">
                                                        <input type="hidden" name="id" value="{{$gallery->id}}" />
                                                    </div>
                                                </div>
                                                @if($gallery->image=="no image")
                                                    <div class="form-group row" id="link">
                                                        <label class="col-md-3 label-control"
                                                               for="projectinput2">Video Link</label>
                                                        <div class="col-md-9">
                                                            <input type="text" id="projectinput2" class="form-control"
                                                                   value="{{$gallery->video_link}}" name="video_link">
                                                        </div>
                                                    </div>
                                                @else
                                                    <div class="form-group row">
                                                        <label class="col-md-3 label-control" for="projectinput2">Add Photo</label>
                                                        <div class="col-md-9">
                                                            <input type="file" id="projectinput2" class="form-control"
                                                                   placeholder="Enter slug" name="photo">
                                                        </div>
                                                    </div>
                                                @endif

                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="projectinput4">Details</label>
                                                    <div class="col-md-9">
                                                        <textarea class="form-control" rows="10"
                                                                  name="description"
                                                                  placeholder="Enter text ...">{{$gallery->description}}</textarea>
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
    <script>

        function myFunction() {
            var checkBox = document.getElementById("myCheck1");
            var text = document.getElementById("text");
            var link = document.getElementById("link");
            if (checkBox.checked == true){
                text.style.display = "block";
                link.style.display = "none";
            } else {
                text.style.display = "none";
            }
        }
    </script>

@endsection