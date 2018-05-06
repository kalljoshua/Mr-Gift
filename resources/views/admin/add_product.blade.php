@extends('...layouts.admin_layout')
@section('title')
    <title>::Mr.Gift-Admin::New Product</title>
@endsection

@section('content')
    @include('flash::message')
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2">
                    <h3 class="content-header-title mb-0">New Product</h3>
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">Products</a>
                                </li>
                                <li class="breadcrumb-item active">New Product
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>

            </div>

            <div class="content-body"><!-- HTML5 export buttons table -->
                <!-- Column selectors table -->
                <section id="column-selectors">
                    <div class="row padding-bottom-40">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">New Product</h4>
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
                                        <div class="col-md-12">
                                            <form action="{{route('admin.post-products')}}" method="post" enctype="multipart/form-data">
                                                {{ csrf_field() }}
                                                <h5 class="title-2">Product name and Description</h5>
                                                <div class="add-tab-content form-group mb30 clearfix">
                                                    <div class="form-group mb30">
                                                        <label class="control-label">Product name</label>
                                                        <input class="form-control input-md" name="name"
                                                               placeholder="Enter a Product name"
                                                               required="" type="text">
                                                    </div>
                                                    <div class="form-group mb30">
                                                        <label class="control-label">Product price</label>
                                                        <input class="form-control input-md" name="price"
                                                               placeholder="Enter a Product price"
                                                               required="" type="text">
                                                    </div>
                                                    <div class="form-group mb30">
                                                        <label class="control-label" for="textarea">Product Describe</label>
                                                        <textarea class="form-control" id="textarea" name="description"
                                                                  placeholder="Describe your Product"
                                                                  rows="4"></textarea>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label for="property-type">Colors</label>
                                                                <input class="form-control input-md" name="colors"
                                                                       placeholder="With Commas: Blue,Red,Black..."
                                                                       type="text">
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label for="property-type">Sizes</label>
                                                                <input class="form-control input-md" name="sizes"
                                                                       placeholder="With Commas: S,M,L,XL or 41,42.."
                                                                       type="text">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h5 class="title-2">Occasions and Categories</h5>
                                                <div class="form-group mb30 clearfix">
                                                    <div class="add-tab-content">
                                                        <div class="add-tab-row push-padding-bottom">
                                                            <div class="row">
                                                                <div class="col-sm-6">
                                                                    <div class="form-group">
                                                                        <label for="property-type">Occasions</label>
                                                                        <select class="form-control"
                                                                                title="Select"
                                                                                name="occassion_id" required>
                                                                            @foreach(App\Occassion::all() as $type)
                                                                                <option value="{{$type->id}}"
                                                                                        selected="selected">{{$type->name}}</option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <div class="form-group">
                                                                        <label for="property-type">Category</label>
                                                                        <select class="form-control" title="Select"
                                                                                id="property-type"
                                                                                name="category_id" required>
                                                                            <option value="" selected="selected">Select category</option>
                                                                            @foreach(App\Category::all() as $categories)
                                                                                <option value="{{$categories->id}}">
                                                                                    {{$categories->name}}</option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                            <div class="row">
                                                                <div class="col-sm-6">
                                                                    <div class="form-group">
                                                                        <label for="property-type">Sub-Category</label>
                                                                        <select class="form-control"
                                                                                name="sub_category_id" id="subcategory_id">
                                                                            <option value="">Select subcategory</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <div class="form-group">
                                                                        <label for="property-type">Type</label>
                                                                        <select class="form-control" name="type_id">
                                                                            <option value="">Select Type</option>
                                                                            @foreach(App\Type::all() as $categories)
                                                                                <option value="{{$categories->id}}">
                                                                                    {{$categories->name}}</option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>

                                                    </div>
                                                </div>

                                                <h5 class="title-2">Product Features</h5>

                                                <div class="form-group">
                                                    <div class="col-sm-12">
                                                        <div class="form-group">
                                                            <label for="description">Additional Features</label>
                                                            <div class="input-group">
                                                                <input type="text" name="feature[]" id="ContactNo" class="form-control"
                                                                       placeholder="Enter additional Feature">
                                                                <span class="input-group-btn add_field_button">
                                                            <button class="btn-sm btn-info" type="button">+</button>
                                                                               </span>
                                                            </div>
                                                            <div class="input_fields_wrap">

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <h5 class="title-2">Add Images to Your Ad</h5>
                                                <label for="description">Product Images</label>
                                                <?php for($i=1; $i<=4; $i++){?>
                                                <div class="form-group ">
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <div class="fileinput fileinput-new" data-provides="fileinput">
                                                                <div class="fileinput-preview thumbnail" data-trigger="fileinput"
                                                                     style="width: 200px; height: 150px;">
                                                                </div>
                                                                <div>
                                                                <span class="btn btn-primary round
                                                                btn-min-width mr-1 mb-1 btn-file">
                                                                <span class="fileinput-new">
                                                                Select image </span>
                                                                <span class="fileinput-exists">
                                                                Change </span>
                                                                <input type="file" name="image[]" placeholder="Browse Photo">
                                                                </span>
                                                                    <a href="#" class="btn btn-danger
                                                                     round btn-min-width mr-1 mb-1 fileinput-exists" data-dismiss="fileinput">
                                                                        Remove </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="clearfix margin-top-10">
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php }?>

                                                <div class="form-group">
                                                    <div class="col-ms-10 pull-right">
                                                        <button type="submit" name="submit">Submit Product </button>
                                                    </div>
                                                </div>

                                            </form>
                                        </div>
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