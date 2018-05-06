
@extends('...layouts.user_layout')
@section('title')
    <title>::Mr.Gift:: My Products</title>
@endsection

@section('content')

    <!-- Content -->
    <div id="content">

        <!-- Products -->
        <section class="padding-top-40 padding-bottom-60">
            <div class="container">
                <div class="row">

                    <!-- Shop Side Bar -->
                    @include('user.left_menu')

                    <!-- Products -->
                    <div class="col-md-9">

                        <!-- Short List -->
                        <div class="short-lst">
                            <h2>Cell Phones & Accessories</h2>
                            <ul>
                                <!-- Short List -->
                                <li>
                                    <p>Showing 1–12 of 756 results</p>
                                </li>
                                <!-- Short  -->
                                <li >
                                    <select class="selectpicker">
                                        <option>Show 12 </option>
                                        <option>Show 24 </option>
                                        <option>Show 32 </option>
                                    </select>
                                </li>
                                <!-- by Default -->
                                <li>
                                    <select class="selectpicker">
                                        <option>Sort by Default </option>
                                        <option>Low to High </option>
                                        <option>High to Low </option>
                                    </select>
                                </li>

                                <!-- Grid Layer -->
                                <li class="grid-layer"> <a href="GridProducts_3Columns.html#."><i class="fa fa-list margin-right-10"></i></a> <a href="GridProducts_3Columns.html#." class="active"><i class="fa fa-th"></i></a> </li>
                                <li>
                                    <!-- Columns -->
                                    <select class="selectpicker">
                                        <option>3 Columns </option>
                                        <option>4 Columns </option>
                                        <option>5 Columns</option>
                                    </select>
                                </li>
                            </ul>
                        </div>

                        <!-- Items -->
                        <div class="item-col-3">
                            <!-- Product -->
                            <div class="product">
                                <article> <img class="img-responsive" src="images/item-img-1-1.jpg" alt="" > <span class="sale-tag">-25%</span>

                                    <!-- Content -->
                                    <span class="tag">Tablets</span> <a href="GridProducts_3Columns.html#." class="tittle">Mp3 Sumergible Deportivo Slim Con 8GB</a>
                                    <!-- Reviews -->
                                    <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star"></i> <span class="margin-left-10">5 Review(s)</span></p>
                                    <div class="price">$350.00 <span>$200.00</span></div>
                                    <a href="GridProducts_3Columns.html#." class="cart-btn"><i class="icon-basket-loaded"></i></a> </article>
                            </div>

                            <!-- Product -->
                            <div class="product">
                                <article> <img class="img-responsive" src="images/item-img-1-2.jpg" alt="" >
                                    <!-- Content -->
                                    <span class="tag">Appliances</span> <a href="GridProducts_3Columns.html#." class="tittle">Reloj Inteligente Smart Watch M26 Touch Bluetooh </a>
                                    <!-- Reviews -->
                                    <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span></p>
                                    <div class="price">$350.00</div>
                                    <a href="GridProducts_3Columns.html#." class="cart-btn"><i class="icon-basket-loaded"></i></a> </article>
                            </div>

                            <!-- Product -->
                            <div class="product">
                                <article> <img class="img-responsive" src="images/item-img-1-3.jpg" alt="" > <span class="new-tag">New</span>

                                    <!-- Content -->
                                    <span class="tag">Accessories</span> <a href="GridProducts_3Columns.html#." class="tittle">Teclado Inalambrico Bluetooth Con Air Mouse</a>
                                    <!-- Reviews -->
                                    <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span></p>
                                    <div class="price">$350.00</div>
                                    <a href="GridProducts_3Columns.html#." class="cart-btn"><i class="icon-basket-loaded"></i></a> </article>
                            </div>

                            <!-- Product -->
                            <div class="product">
                                <article> <img class="img-responsive" src="images/item-img-1-4.jpg" alt="" >
                                    <!-- Content -->
                                    <span class="tag">Appliances</span> <a href="GridProducts_3Columns.html#." class="tittle">Funda Para Ebook 7" 128GB full HD</a>
                                    <!-- Reviews -->
                                    <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span></p>
                                    <div class="price">$350.00</div>
                                    <a href="GridProducts_3Columns.html#." class="cart-btn"><i class="icon-basket-loaded"></i></a> </article>
                            </div>

                            <!-- Product -->
                            <div class="product">
                                <article> <img class="img-responsive" src="images/item-img-1-5.jpg" alt="" >
                                    <!-- Content -->
                                    <span class="tag">Appliances</span> <a href="GridProducts_3Columns.html#." class="tittle">Reloj Inteligente Smart Watch M26 Touch Bluetooh </a>
                                    <!-- Reviews -->
                                    <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span></p>
                                    <div class="price">$350.00</div>
                                    <a href="GridProducts_3Columns.html#." class="cart-btn"><i class="icon-basket-loaded"></i></a> </article>
                            </div>

                            <!-- Product -->
                            <div class="product">
                                <article> <img class="img-responsive" src="images/item-img-1-6.jpg" alt="" > <span class="new-tag">New</span>

                                    <!-- Content -->
                                    <span class="tag">Accessories</span> <a href="GridProducts_3Columns.html#." class="tittle">Teclado Inalambrico Bluetooth Con Air Mouse</a>
                                    <!-- Reviews -->
                                    <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star"></i> <span class="margin-left-10">5 Review(s)</span></p>
                                    <div class="price">$350.00</div>
                                    <a href="GridProducts_3Columns.html#." class="cart-btn"><i class="icon-basket-loaded"></i></a> </article>
                            </div>

                            <!-- Product -->
                            <div class="product">
                                <article> <img class="img-responsive" src="images/item-img-1-7.jpg" alt="" >
                                    <!-- Content -->
                                    <span class="tag">Appliances</span> <a href="GridProducts_3Columns.html#." class="tittle">Funda Para Ebook 7" 128GB full HD</a>
                                    <!-- Reviews -->
                                    <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star"></i> <span class="margin-left-10">5 Review(s)</span></p>
                                    <div class="price">$350.00</div>
                                    <a href="GridProducts_3Columns.html#." class="cart-btn"><i class="icon-basket-loaded"></i></a> </article>
                            </div>

                            <!-- Product -->
                            <div class="product">
                                <article> <img class="img-responsive" src="images/item-img-1-8.jpg" alt="" >
                                    <!-- Content -->
                                    <span class="tag">Appliances</span> <a href="GridProducts_3Columns.html#." class="tittle">Reloj Inteligente Smart Watch M26 Touch Bluetooh </a>
                                    <!-- Reviews -->
                                    <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star"></i> <span class="margin-left-10">5 Review(s)</span></p>
                                    <div class="price">$350.00</div>
                                    <a href="GridProducts_3Columns.html#." class="cart-btn"><i class="icon-basket-loaded"></i></a> </article>
                            </div>

                            <!-- Product -->
                            <div class="product">
                                <article> <img class="img-responsive" src="images/item-img-1-9.jpg" alt="" >
                                    <!-- Content -->
                                    <span class="tag">Appliances</span> <a href="GridProducts_3Columns.html#." class="tittle">Reloj Inteligente Smart Watch M26 Touch Bluetooh </a>
                                    <!-- Reviews -->
                                    <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span></p>
                                    <div class="price">$350.00</div>
                                    <a href="GridProducts_3Columns.html#." class="cart-btn"><i class="icon-basket-loaded"></i></a> </article>
                            </div>

                            <!-- Product -->
                            <div class="product">
                                <article> <img class="img-responsive" src="images/item-img-1-10.jpg" alt="" > <span class="new-tag">New</span>

                                    <!-- Content -->
                                    <span class="tag">Accessories</span> <a href="GridProducts_3Columns.html#." class="tittle">Teclado Inalambrico Bluetooth Con Air Mouse</a>
                                    <!-- Reviews -->
                                    <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star"></i> <span class="margin-left-10">5 Review(s)</span></p>
                                    <div class="price">$350.00</div>
                                    <a href="GridProducts_3Columns.html#." class="cart-btn"><i class="icon-basket-loaded"></i></a> </article>
                            </div>

                            <!-- Product -->
                            <div class="product">
                                <article> <img class="img-responsive" src="images/item-img-1-11.jpg" alt="" >
                                    <!-- Content -->
                                    <span class="tag">Appliances</span> <a href="GridProducts_3Columns.html#." class="tittle">Funda Para Ebook 7" 128GB full HD</a>
                                    <!-- Reviews -->
                                    <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star"></i> <span class="margin-left-10">5 Review(s)</span></p>
                                    <div class="price">$350.00</div>
                                    <a href="GridProducts_3Columns.html#." class="cart-btn"><i class="icon-basket-loaded"></i></a> </article>
                            </div>

                            <!-- Product -->
                            <div class="product">
                                <article> <img class="img-responsive" src="images/item-img-1-12.jpg" alt="" >
                                    <!-- Content -->
                                    <span class="tag">Appliances</span> <a href="GridProducts_3Columns.html#." class="tittle">Reloj Inteligente Smart Watch M26 Touch Bluetooh </a>
                                    <!-- Reviews -->
                                    <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star"></i> <span class="margin-left-10">5 Review(s)</span></p>
                                    <div class="price">$350.00</div>
                                    <a href="GridProducts_3Columns.html#." class="cart-btn"><i class="icon-basket-loaded"></i></a> </article>
                            </div>

                            <!-- pagination -->
                            <ul class="pagination">
                                <li><a href="GridProducts_3Columns.html#" aria-label="Previous"> <i class="fa fa-angle-left"></i> </a> </li>
                                <li><a class="active" href="GridProducts_3Columns.html#">1</a></li>
                                <li><a href="GridProducts_3Columns.html#">2</a></li>
                                <li><a href="GridProducts_3Columns.html#">3</a></li>
                                <li><a href="GridProducts_3Columns.html#" aria-label="Next"> <i class="fa fa-angle-right"></i> </a> </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Your Recently Viewed Items -->
        <section class="padding-bottom-60">
            <div class="container">

                <!-- heading -->
                <div class="heading">
                    <h2>Your Recently Viewed Items</h2>
                    <hr>
                </div>
                <!-- Items Slider -->
                <div class="item-slide-5 with-nav">
                    <!-- Product -->
                    <div class="product">
                        <article> <img class="img-responsive" src="images/item-img-1-1.jpg" alt="" >
                            <!-- Content -->
                            <span class="tag">Latop</span> <a href="GridProducts_3Columns.html#." class="tittle">Laptop Alienware 15 i7 Perfect For Playing Game</a>
                            <!-- Reviews -->
                            <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span></p>
                            <div class="price">$350.00 </div>
                            <a href="GridProducts_3Columns.html#." class="cart-btn"><i class="icon-basket-loaded"></i></a> </article>
                    </div>
                    <!-- Product -->
                    <div class="product">
                        <article> <img class="img-responsive" src="images/item-img-1-2.jpg" alt="" > <span class="sale-tag">-25%</span>

                            <!-- Content -->
                            <span class="tag">Tablets</span> <a href="GridProducts_3Columns.html#." class="tittle">Mp3 Sumergible Deportivo Slim Con 8GB</a>
                            <!-- Reviews -->
                            <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span></p>
                            <div class="price">$350.00 <span>$200.00</span></div>
                            <a href="GridProducts_3Columns.html#." class="cart-btn"><i class="icon-basket-loaded"></i></a> </article>
                    </div>

                    <!-- Product -->
                    <div class="product">
                        <article> <img class="img-responsive" src="images/item-img-1-3.jpg" alt="" >
                            <!-- Content -->
                            <span class="tag">Appliances</span> <a href="GridProducts_3Columns.html#." class="tittle">Reloj Inteligente Smart Watch M26 Touch Bluetooh </a>
                            <!-- Reviews -->
                            <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span></p>
                            <div class="price">$350.00</div>
                            <a href="GridProducts_3Columns.html#." class="cart-btn"><i class="icon-basket-loaded"></i></a> </article>
                    </div>

                    <!-- Product -->
                    <div class="product">
                        <article> <img class="img-responsive" src="images/item-img-1-4.jpg" alt="" > <span class="new-tag">New</span>

                            <!-- Content -->
                            <span class="tag">Accessories</span> <a href="GridProducts_3Columns.html#." class="tittle">Teclado Inalambrico Bluetooth Con Air Mouse</a>
                            <!-- Reviews -->
                            <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span></p>
                            <div class="price">$350.00</div>
                            <a href="GridProducts_3Columns.html#." class="cart-btn"><i class="icon-basket-loaded"></i></a> </article>
                    </div>

                    <!-- Product -->
                    <div class="product">
                        <article> <img class="img-responsive" src="images/item-img-1-5.jpg" alt="" >
                            <!-- Content -->
                            <span class="tag">Appliances</span> <a href="GridProducts_3Columns.html#." class="tittle">Funda Para Ebook 7" 128GB full HD</a>
                            <!-- Reviews -->
                            <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span></p>
                            <div class="price">$350.00</div>
                            <a href="GridProducts_3Columns.html#." class="cart-btn"><i class="icon-basket-loaded"></i></a> </article>
                    </div>

                    <!-- Product -->
                    <div class="product">
                        <article> <img class="img-responsive" src="images/item-img-1-6.jpg" alt="" > <span class="sale-tag">-25%</span>

                            <!-- Content -->
                            <span class="tag">Tablets</span> <a href="GridProducts_3Columns.html#." class="tittle">Mp3 Sumergible Deportivo Slim Con 8GB</a>
                            <!-- Reviews -->
                            <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span></p>
                            <div class="price">$350.00 <span>$200.00</span></div>
                            <a href="GridProducts_3Columns.html#." class="cart-btn"><i class="icon-basket-loaded"></i></a> </article>
                    </div>

                    <!-- Product -->
                    <div class="product">
                        <article> <img class="img-responsive" src="images/item-img-1-7.jpg" alt="" >
                            <!-- Content -->
                            <span class="tag">Appliances</span> <a href="GridProducts_3Columns.html#." class="tittle">Reloj Inteligente Smart Watch M26 Touch Bluetooh </a>
                            <!-- Reviews -->
                            <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span></p>
                            <div class="price">$350.00</div>
                            <a href="GridProducts_3Columns.html#." class="cart-btn"><i class="icon-basket-loaded"></i></a> </article>
                    </div>

                    <!-- Product -->
                    <div class="product">
                        <article> <img class="img-responsive" src="images/item-img-1-8.jpg" alt="" > <span class="new-tag">New</span>

                            <!-- Content -->
                            <span class="tag">Accessories</span> <a href="GridProducts_3Columns.html#." class="tittle">Teclado Inalambrico Bluetooth Con Air Mouse</a>
                            <!-- Reviews -->
                            <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span></p>
                            <div class="price">$350.00</div>
                            <a href="GridProducts_3Columns.html#." class="cart-btn"><i class="icon-basket-loaded"></i></a> </article>
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