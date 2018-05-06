<style>
    .glyphicon { margin-right:10px; }
    .panel-body { padding:0px; }
    .panel-body table tr td { padding-left: 15px }
    .panel-body .table {margin-bottom: 0px; }
</style>

        <div class="col-md-3">
            <div class="shop-side-bar">
                @if(Auth::guard('user')->user())
                <div class="panel-group" id="accordion">
                    <div class="panel-default" style="border: solid; border-color: #F5F5F5;
                        border-radius: 5px; margin-bottom: 5px">
                        <ul class="nav navbar-right cart-pop" style="padding: 10px; margin-bottom: 1px;">
                            <li>
                                <div class="media-left"> <a href="#" class="thumb">
                                        <img src="/images/users/profile_330x330/{{Auth::guard('user')->user()->image}}" class="img-responsive" alt="" > </a>
                                </div>
                                <div class="media-body"> <a href="#" class="tittle">
                                        {{Auth::guard('user')->user()->name}} <br/>
                                        {{Auth::guard('user')->user()->email}}<br/>
                                        {{Auth::guard('user')->user()->phone}}
                                    </a>
                                </div>
                            </li>

                        </ul>
                        <div id="collapseOne" class="panel-collapse collapse in">
                            <div class="panel-body">
                                <table class="table">
                                    <tr>
                                        <td>
                                            <span class="glyphicon glyphicon-gift text-success"></span>
                                            <a href="{{route('user.products')}}">Products</a>
                                            <span class="badge">{{Auth::guard('user')->user()->products->count()}}</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="glyphicon glyphicon-usd text-success"></span>
                                            <a href="{{route('user.orders')}}">Orders</a>
                                            <span class="badge">{{Auth::guard('user')->user()->orders->count()}}</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="glyphicon glyphicon-pencil text-primary"></span>
                                            <a href="#" data-toggle="modal" data-target="#modal-profile-edit">
                                                Edit Profile</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="glyphicon glyphicon-lock text-primary"></span>
                                            <a href="#" data-toggle="modal" data-target="#modal-password-edit">
                                                Change Password</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="glyphicon glyphicon-trash text-danger"></span>
                                            <a href="{{route('user.profile.delete')}}" class="text-danger">
                                                Delete Account</a>
                                        </td>
                                    </tr>
                                </table>


                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                        <span class="glyphicon glyphicon-user">
                                    </span>Account
                                </h4>
                            </div>
                        </a>
                        <div id="collapseThree" class="panel-collapse collapse">
                            <div class="panel-body">
                                <table class="table">
                                    <tr>
                                        <td>
                                            <span class="glyphicon glyphicon-hourglass text-primary"></span>
                                            <a href="{{route('user.pending.products')}}">Pending Products</a>
                                            <span class="label label-info">5</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="glyphicon glyphicon-alert text-primary"></span>
                                            <a href="{{route('user.suspended.products')}}">Suspended</a>
                                            <span class="label label-info">5</span>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                        <span class="glyphicon glyphicon-list">
                                    </span>Browse by Occasion
                                </h4>
                            </div>
                        </a>
                        <div id="collapseTwo" class="panel-collapse collapse">
                            <div class="panel-body">
                                <table class="table">
                                    @foreach(App\Occassion::all() as $occasion)
                                        <tr>
                                            <td>
                                                <a href="{{route('product.occasion',['name'=>$occasion->name])}}">
                                                    {{$occasion->name}}</a>
                                                <span class="label label-success">{{$occasion->products->count()}}</span>
                                            </td>
                                        </tr>
                                    @endforeach
                                </table>
                            </div>
                        </div>
                    </div>

                </div>

                @else
                    <div class="panel-group" id="accordion">
                        @foreach(App\Category::all() as $category)
                            <div class="panel panel-default" >
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree{{$category->id}}">
                                    <div class="panel-heading" style="">
                                        <h6 class="panel-title" style="font-size: 12px; margin-bottom: 1px">
                                            <span class="glyphicon glyphicon-tags"> </span>
                                            &nbsp;{{$category->name}}
                                            <span class="glyphicon glyphicon-plus pull-right"> </span>
                                        </h6>

                                    </div>
                                </a>
                                <div id="collapseThree{{$category->id}}" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <table class="table">
                                            @foreach($category->sub_categories as $sub_category)
                                                <tr>
                                                    <td>
                                                        <a href="{{route('product.category',['id'=>$sub_category->id])}}"
                                                           style="font-size: 13px">
                                                            {{$sub_category->name}}</a>
                                                        <span class="label label-info pull-right">
                                                            {{$sub_category->products->count()}}</span>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </table>
                                    </div>
                                </div>
                            </div>

                        @endforeach
                    </div>

                @endif

                <!-- Categories -->

                <div class="checkbox checkbox-primary">

                </div>



            </div>
        </div>