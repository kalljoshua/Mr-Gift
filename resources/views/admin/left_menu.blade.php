<div data-scroll-to-active="true" class="main-menu menu-fixed menu-light menu-accordion menu-shadow">
    <div class="main-menu-content">
        <ul id="main-menu-navigation" data-menu="menu-navigation" class="navigation navigation-main">
            <li class=" navigation-header"><span>General</span>
                <i data-toggle="tooltip" data-placement="right"
                   data-original-title="General" class=" fa fa--minus"></i>
            </li>
            <li class=" nav-item"><a href="{{route('admin.dashboard')}}"><i class="fa fa-home"></i>
                    <span data-i18n="" class="menu-title">Dashboard</span></a>
            </li>
            <li class=" nav-item"><a href="#"><i class="fa fa-folder"></i>
                    <span data-i18n="" class="menu-title">Products</span></a>
                        <ul class="menu-content">
                            <li><a href="{{route('admin.all-products')}}" class="menu-item">
                                    <i class="fa fa-circle-o"></i> Product Listings</a>
                            </li>
                            <li><a href="{{route('admin.pending.products')}}" class="menu-item">
                                    <i class="fa fa-hourglass-half"></i> Pending Products</a>
                            </li>
                            <li><a href="{{route('admin.featured.products')}}" class="menu-item">
                                    <i class="fa fa-star"></i> Featured Products</a>
                            </li>
                            <li><a href="{{route('admin.product.requests')}}" class="menu-item">
                                    <i class="fa fa-recycle"></i> Product Requests</a>
                            </li>
                            <li><a href="{{route('admin.new-product')}}" class="menu-item">
                                    <i class="fa fa-plus-square"></i> New Product</a>
                            </li>
                        </ul>
            </li>
            <li class=" nav-item"><a href="#"><i class="fa fa-rss-square"></i>
                    <span data-i18n="" class="menu-title">Blog</span></a>
                    <ul class="menu-content">
                        <li><a href="{{route('admin.create.post.form')}}" class="menu-item">
                                <i class="fa fa-plus-square"></i> New Blog</a></li>
                        <li><a href="{{route('admin.blog.list')}}" class="menu-item">
                                <i class="fa fa-list"></i> Blog Posts</a></li>

                    </ul>
            </li>

            <li class=" nav-item"><a href="#"><i class="fa fa-photo"></i>
                    <span data-i18n="" class="menu-title">Gallery</span></a>
                <ul class="menu-content">
                    <li><a href="{{route('admin.create.gallery.form')}}" class="menu-item">
                            <i class="fa fa-plus-square"></i> New Gallery</a></li>
                    <li><a href="{{route('admin.gallery.list')}}" class="menu-item">
                            <i class="fa fa-list"></i> Blog Posts</a></li>

                </ul>
            </li>

            <li class=" nav-item"><a href="#"><i class="fa fa-list"></i>
                    <span data-i18n="" class="menu-title">Categories and Types</span></a>
                <ul class="menu-content">
                    <li><a href="{{route('admin.new.category')}}" class="menu-item">
                            <i class="fa fa-plus-square"></i> New Category</a></li>
                    <li><a href="{{route('admin.all.categories')}}" class="menu-item">
                            <i class="fa fa-list"></i> Categories</a></li>

                    <li><a href="{{route('admin.new.subcategory')}}" class="menu-item">
                            <i class="fa fa-plus-square"></i> New Sub-Category</a></li>
                    <li><a href="{{route('admin.all.subcategories')}}" class="menu-item">
                            <i class="fa fa-list"></i> Sub-Category</a></li>

                    <li><a href="{{route('admin.new.type')}}" class="menu-item">
                            <i class="fa fa-plus-square"></i> New Type</a></li>
                    <li><a href="{{route('admin.all.types')}}" class="menu-item">
                            <i class="fa fa-list"></i> Types</a></li>

                    <li><a href="{{route('admin.new.occasion')}}" class="menu-item">
                            <i class="fa fa-plus-square"></i> New Occasion</a></li>
                    <li><a href="{{route('admin.all.occasions')}}" class="menu-item">
                            <i class="fa fa-list"></i> Occasions</a></li>

                </ul>
            </li>
            <li class=" nav-item"><a href="#"><i class="fa fa-shopping-cart"></i>
                    <span data-i18n="" class="menu-title">Sales</span></a>
                <ul class="menu-content">
                    <li><a href="{{route('product.sales')}}" class="menu-item">
                            <i class="fa fa-money"></i> Product Sales</a></li>

                </ul>
            </li>
            <li class=" nav-item"><a href="#"><i class="fa fa-users"></i>
                    <span data-i18n="" class="menu-title">Users</span></a>
                <ul class="menu-content">
                    <li><a href="{{route('admin.users')}}" class="menu-item">
                            <i class="fa fa-users"></i> Register User</a></li>

                </ul>
            </li>
            <li class=" nav-item"><a href="#"><i class="fa fa-newspaper-o"></i>
                    <span data-i18n="" class="menu-title">Newsletters</span></a>
                <ul class="menu-content">
                    <li><a href="{{route('admin.subscribers.listings')}}" class="menu-item">
                            <i class="fa fa-list"></i> Subscribers</a></li>
                    <li><a href="{{route('admin.create.news.letter.form')}}" class="menu-item">
                            <i class="fa fa-plus-square"></i> New Letter</a></li>

                </ul>
            </li>

            <li class=" nav-item"><a href="#"><i class="fa fa-film"></i>
                    <span data-i18n="" class="menu-title">Adverts</span></a>
                <ul class="menu-content">
                    <li><a href="{{route('admin.banner.list')}}" class="menu-item">
                            <i class="fa fa-list"></i> Banners</a></li>
                    <li><a href="{{route('admin.create.banner.form')}}" class="menu-item">
                            <i class="fa fa-plus-square"></i> New Banner</a></li>
                    {{---<li><a href="{{route('admin.create.advert.form')}}" class="menu-item">
                            <i class="fa fa-plus-square"></i> New Advert</a></li>
                    <li><a href="{{route('admin.blog.list')}}" class="menu-item">
                            <i class="fa fa-list"></i> Adverts</a></li>---}}

                </ul>
            </li>
            <li class=" nav-item"><a href="#"><i class="fa fa-briefcase"></i>
                    <span data-i18n="" class="menu-title">Sponsors</span></a>
                <ul class="menu-content">
                    <li><a href="{{route('admin.sponsors.listings')}}" class="menu-item">
                            <i class="fa fa-list"></i> Sponsors</a></li>
                    <li><a href="{{route('admin.sponsors.new.form')}}" class="menu-item">
                            <i class="fa fa-plus-square"></i> New Sponsor</a></li>

                </ul>
            </li>

        </ul>
    </div>
</div>