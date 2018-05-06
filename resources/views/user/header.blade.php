<!-- Top bar -->
<div class="top-bar">
    <div class="container">
        <div class="right-sec">
            <ul>
                @if(Auth::guard('user')->user())
                    <li><a href="{{route('user.products')}}">My Account </a></li>
                    <li><a href="{{route('display.gallery')}}">Gallery</a></li>
                    <li><a href="{{route('product.create')}}">Sell A Gift</a></li>
                    <li><span class="btn-sm btn-danger">
                            <a href="#"data-toggle="modal"
                               data-target="#modal-request" style="color:white"> Request A Gift </a></span>
                    </li>
                    <li><a href="{{route('user.logout')}}">Logout </a></li>
                @else
                    <li><a href="{{route('user.login.register')}}">Login/Register </a></li>
                    <li><a href="{{route('display.gallery')}}">Gallery</a></li>
                    <li><a href="{{route('product.create')}}">Sell A Gift </a></li>
                    <li><span class="btn-sm btn-danger">
                            <a href="#"data-toggle="modal"
                               data-target="#modal-request" style="color:white"> Request A Gift </a></span>
                    </li>
                @endif

            </ul>
            <div class="social-top">
                <a href="https://www.facebook.com/sharer.php?u={{Request::url()}}" 
                target="_blank"><i class="fa fa-facebook"></i></a>
                <a href="https://twitter.com/intent/tweet?url={{Request::url()}}" 
                target="_blank"><i class="fa fa-twitter"></i></a>
                <a href="https://www.linkedin.com/shareArticle?url={{Request::url()}}&title=Mr.Gift"
                target="_blank"><i class="fa fa-linkedin"></i></a>
                <a href="https://plus.google.com/share?url={{Request::url()}}"
                 target="_blank"><i class="fa fa-google-plus"></i></a>
                <a href="https://api.whatsapp.com/send?phone=whatsappphonenumber&text=urlencodedtext"
                target="_blank"><i class="fa fa-whatsapp"></i></a>
            </div>
        </div>
    </div>
</div>

<!-- Header -->
<header style="background-color: #90030E">
    <div class="container">
        <div class="logo" style="margin-top: -47px"> <a href="/">
                <img src="/client_inc/images/logo.png" alt="" ></a>
        </div>
        <div class="search-cate">
            <form method="get" action="{{route('users.search')}}">
                <select class="selectpicker" name="category_id">
                    <option value=""> All Categories</option>
                    @foreach(App\Category::all() as $category)
                        <option value="{{$category->id}}"> {{$category->name}}</option>
                    @endforeach
                </select>
                <select class="selectpicker" name="occassion_id">
                    <option value=""> All Occasions</option>
                    @foreach(App\Occassion::all() as $occasion)
                        <option value="{{$occasion->id}}"> {{$occasion->name}}</option>
                    @endforeach

                </select>
                <input type="search" placeholder="Search entire store here..." name="keyword">
                <button class="submit" type="submit"><i class="icon-magnifier"></i></button>
            </form>
        </div>


        <!-- Cart Part -->
        <ul class="nav navbar-right cart-pop">
            <li class="dropdown"> <a href="{{route('product.shoppingCart')}}">
                    @if (Cart::instance('default')->count() > 0)
                        <span class="itm-cont" style="color: white">{{ Cart::instance('default')->count() }}</span>
                    @endif
                    <i class="flaticon-shopping-bag"></i>
                     <br><strong style="color: white">My Cart</strong></a>

            </li>
        </ul>
    </div>

    <!-- Nav -->

</header>
<div class="modal fade" id="modal-request">
    <div class="modal-dialog">
        <div class="modal-content">
            <span class="text-center"><h5><b>Request a Gift</b></h5></span>
            <div class="content" style="padding: 10px;">
                <form role="form" method="post" action="{{route('submit.request')}}">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label class="control-label">Full Name</label>
                        <input class="form-control" id="oldpass" name="name"
                               placeholder="Full name" type="text">
                    </div>
                    <div class="form-group">
                        <label class="control-label">Occasion</label>
                        <select name="occasion" class="form-control">
                            <option value="">Select Occasion</option>
                            @foreach(App\Occassion::all() as $occasion)
                                <option value="{{$occasion->name}}">{{$occasion->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Delivery Address</label>
                        <input class="form-control"  name="address"
                               placeholder="Delivery address" type="text">
                    </div>
                    <div class="form-group">
                        <label class="control-label">Delivery Date</label>
                        <input class="form-control" name="date"
                               placeholder="Delivery date" type="text">
                    </div>
                    <div class="form-group">
                        <label class="control-label">Phone Number</label>
                        <input class="form-control" name="contact"
                               placeholder="Phone Number" type="text">
                    </div>
                    <div class="form-group">
                        <label class="control-label">Recipient Gender</label>
                        <select name="gender" class="form-control">
                            <option value="">Select Gender</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Recipient Age</label>
                        <input class="form-control" name="age"
                               placeholder="Recipient Age" pattern="\d+" type="text">
                    </div>
                    <div class="form-group">
                        <button type="button" class="btn-round"
                                data-dismiss="modal">
                            Close
                        </button>
                        <button type="submit" class="btn-round pull-right">
                            Request</button>

                    </div>
                </form>
            </div>

        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
@include('flash::message')
@include('user.update_profile')