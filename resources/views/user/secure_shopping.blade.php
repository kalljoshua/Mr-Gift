@extends('...layouts.user_layout')
@section('title')
    <title>::Mr.Gift:: Secure Shopping</title>
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
    </div>
    <!-- End Content -->

@endsection