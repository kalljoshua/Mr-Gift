
@extends('...layouts.user_layout')
@section('title')
    <title>::Mr.Gift:: Affiliate Program</title>
@endsection

@section('content')

    <div id="content">

        <!-- Error Page -->
        <section>
            <div class="container">
                <div class="order-success error-page">
                    <img src="/client_inc/images/error-img.jpg" alt="" >
                    <h3><span>Sorry!</span> Content Coming Soon</h3>
                    <p>We’re sorry but the content of this page will be added soon. Please keep checking.<br>
                        You could return to <a href="/">homepage</a> or using
                        <a href="/">search!</a></p>
                </div>
            </div>
        </section>

        <!-- Clients img -->
        @include('user.sponsors')

        <!-- Newslatter -->
        <section class="newslatter">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h3>Subscribe our Newsletter <span>Get <strong>25% Off</strong> first purchase!</span></h3>
                    </div>
                    <div class="col-md-6">
                        <form>
                            <input type="email" placeholder="Your email address here...">
                            <button type="submit">Subscribe!</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- End Content -->

@endsection