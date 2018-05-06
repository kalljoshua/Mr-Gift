@extends('...layouts.user_layout')
@section('title')
    <title>:Mr.Gift:Login/Register</title>
@endsection

@section('content')
    <!-- Content -->
    <div id="content">

        <!-- Linking -->
        <div class="linking">
            <div class="container">
                <ol class="breadcrumb">
                    <li><a href="LoginForm.html#">Home</a></li>
                    <li class="active">Authentication</li>
                </ol>
            </div>
        </div>

        <!-- Blog -->
        <section class="login-sec padding-top-30 padding-bottom-100">
            <div class="container">
                <div class="row">

                    <!-- Don’t have an Account? Register now -->
                    <div class="col-md-6">
                        <h5>Don’t have an Account? Register now</h5>

                        <!-- FORM -->
                        <form action="{{route('user.submit')}}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <ul class="row">
                                <li class="col-sm-12">
                                    <label>Full Name:
                                        <input type="text" class="form-control" name="name"
                                               placeholder="Enter Fullname">
                                    </label>
                                </li>
                                <li class="col-sm-12">
                                    <label>Phone Number:
                                        <input type="text" class="form-control" name="phone"
                                               placeholder="Enter Phone Number">
                                    </label>
                                </li>
                                <li class="col-sm-12">
                                    <label>Email Address:
                                        <input type="email" class="form-control" name="email"
                                               placeholder="Enter Email Address">
                                    </label>
                                </li>
                                <li class="col-sm-12">
                                    <label>Password:
                                        <input type="password" class="form-control" name="password"
                                               placeholder="">
                                    </label>
                                </li>
                                <li class="col-sm-12">
                                    <label>Confirm Password:
                                        <input type="password" class="form-control" name="pass"
                                               placeholder="">
                                    </label>
                                </li>
                                <li class="col-sm-12 text-left">
                                    <button type="submit" class="btn-round">Register</button>
                                </li>
                            </ul>
                        </form>
                    </div>

                    <div class="col-md-6">
                        <!-- Login Your Account -->
                        <h5>Login Your Account</h5>

                        <!-- FORM -->
                        <form action="{{route('user.login.submit')}}" method="post">
                            {{ csrf_field() }}
                            <ul class="row">
                                <li class="col-sm-12">
                                    <label>Email Address:
                                        <input type="email" class="form-control" name="email"
                                               placeholder="Enter Email Address">
                                    </label>
                                </li>
                                <li class="col-sm-12">
                                    <label>Password
                                        <input type="password" class="form-control" name="password"
                                               placeholder="">
                                    </label>
                                </li>
                                <li class="col-sm-6">
                                    <div class="checkbox checkbox-primary">
                                        <input id="cate1" class="styled" type="checkbox" >
                                        <label for="cate1"> Keep me logged in </label>
                                    </div>
                                </li>
                                <li class="col-sm-6"> <a href="LoginForm.html#." class="forget">Forgot your password?</a> </li>
                                <li class="col-sm-12 text-left">
                                    <button type="submit" class="btn-round">Login</button>
                                </li>
                            </ul>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <!-- Clients img -->
        <section class="light-gry-bg clients-img">
            <div class="container">
                <ul>
                    <li><img src="images/c-img-1.png" alt="" ></li>
                    <li><img src="images/c-img-2.png" alt="" ></li>
                    <li><img src="images/c-img-3.png" alt="" ></li>
                    <li><img src="images/c-img-4.png" alt="" ></li>
                    <li><img src="images/c-img-5.png" alt="" ></li>
                </ul>
            </div>
        </section>
    <!-- End Content -->
@endsection