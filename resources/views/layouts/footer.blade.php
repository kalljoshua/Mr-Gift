<!-- Footer -->
<footer>
    <!-- Newslatter -->
    <section class="newslatter" style="background-color: #A20514">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h3>Subscribe to NEWSLETTERS <span> Enjoy <strong>
                                FREE</strong> Delivery on orders above $30</span></h3>
                </div>
                <div class="col-md-6">
                    <form action="/subscribe-to-newsletter" method="post" class="clearfix">
                        {{ csrf_field() }}
                        <input type="email" id="mc4wp_email" name="email"
                               placeholder="Enter Your email address...." required="">
                        <button type="submit">Subscribe!</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <div class="container">

        <div class="row">

            <!-- Contact -->
            <div class="col-md-4">

                <h4>COMPANY</h4>
                <ul class="links-footer">
                    <li><a href="{{route('user.about')}}">About Us</a></li>
                    <li><a href="{{route('user.login.register')}}">Register/Login</a></li>
                    <li><a href="{{route('user.blog.posts')}}">Blog</a></li>
                    <li><a href="{{route('user.contact')}}">Contact Us</a></li>
                    <li><a href="{{route('product.create')}}">Sell On Mr.Gift</a></li>
                </ul>
                <div class="social-links">
                    <a href="https://www.facebook.com/MrGiftUganda/" target="_blank"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-linkedin"></i></a>
                    <a href="#"><i class="fa fa-pinterest"></i></a>
                    <a href="#"><i class="fa fa-instagram"></i></a>
                    <a href="#"><i class="fa fa-google"></i></a>
                </div>
            </div>

            <!-- Categories -->
            <div class="col-md-3">
                <h4>LEARN MORE ABOUT</h4>
                <ul class="links-footer">
                    <li><a href="{{route('user.reward')}}">Rewards</a></li>
                    <li><a href="{{route('user.affiliates')}}">Affiliates</a></li>
                    <li><a href="{{route('user.privacy')}}">Security & Privacy</a></li>
                    <li><a href="{{route('user.termsofUse')}}">Terms & Conditions</a></li>
                    <li><a href="{{route('secure.shopping')}}"> Secure Shopping</a></li>
                </ul>
            </div>

            <!-- Categories -->
            <div class="col-md-3">
                <h4>MOST POPULAR</h4>
                <ul class="links-footer">
                    @foreach(App\Type::all() as $type)
                        <li><a href="{{route('product.type',['name'=>$type->name])}}"> {{$type->name}}</a></li>
                    @endforeach
                </ul>
            </div>

            <!-- Categories -->
            <div class="col-md-2">
                <h4>LET US HELP YOU</h4>
                <ul class="links-footer">
                    <li><a href="{{route('user.whyUs')}}">Why Order With Mr.Gift</a></li>
                    <li><a href="{{route('new.deal')}}">New Deals</a></li>
                    <li><a href="{{route('delivery')}}">Delivery information</a></li>
                    <li><a href="{{route('store.location')}}">Store Locations</a></li>
                    <li><a href="{{route('user.faq')}}">FAQs</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>

<!-- Rights -->
<div class="rights">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <p>© 2018 <a href="http://www.mrgiftuganda.com" class="ri-li"> Mr.Gift. </a> All Rights Reserved</p>
            </div>
            <div class="col-sm-6 text-right">
                <img src="/client_inc/images/card-icon.png" alt=""> </div>
        </div>
    </div>
</div>

<!-- End Footer -->