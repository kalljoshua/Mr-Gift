<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//users routes
//index routes
Route::get('/', 'User\HomeController@index')->name('home');
Route::get('contact-us', 'User\HomeController@contact')->name('user.contact');
Route::get('about-us', 'User\HomeController@about')->name('user.about');
Route::get('terms-and-conditions', 'User\HomeController@termsofUse')->name('user.termsofUse');
Route::get('Privacy', 'User\HomeController@privacy')->name('user.privacy');
Route::get('new deal', 'User\HomeController@newDeal')->name('new.deal');
Route::get('Store Locations', 'User\HomeController@storeLocation')->name('store.location');
Route::get('Delivery information', 'User\HomeController@delivery')->name('delivery');
Route::get('Personal-Safety', 'User\HomeController@personalsafety')->name('user.personalsafety');
Route::get('secure-shopping', 'User\HomeController@secureShopping')->name('secure.shopping');
Route::get('faq', 'User\HomeController@faq')->name('user.faq');
Route::get('Why Order With Mr.Gift', 'User\HomeController@whyUs')->name('user.whyUs');
Route::get('rewards', 'User\HomeController@reward')->name('user.reward');
Route::get('affiliates', 'User\HomeController@affiliates')->name('user.affiliates');
Route::get('Sell On Mr.Gift', 'User\HomeController@sellWithUs')->name('sell.with.us');
Route::get('gallery', 'User\HomeController@displayGallery')->name('display.gallery');

//search routes
Route::get('/search', 'User\SearchController@search')->name('users.search');

//User authentication routes
Route::get('/authentication', 'User\AuthenticationController@loginRegister')->name('user.login.register');
Route::post('/user/authentication', 'User\AuthenticationController@registerUser')->name('user.submit');
Route::get('/verify/{token}', 'User\VerifyController@verify')->name('verify');
Route::post('/login', 'User\LoginController@login')->name('user.login.submit');
Route::get('/logout', 'User\LoginController@logout')->name('user.logout');

//Admin authentication routes
Route::get('/admin', 'Admin\LoginController@showLoginForm')->name('admin.login');
Route::post('/admin/submit', 'Admin\LoginController@login')->name('admin.login.submit');
Route::get('/admin/logout', 'Admin\LoginController@logout')->name('admin.logout');

//request routes
Route::post('request', 'User\RequestController@submitRequest')->name('submit.request');

//newsletter routes
Route::post('/subscribe-to-newsletter', 'User\NewsletterController@subscribe')->name('subscribe.to.newsletter');

Route::get('/admin/logout', 'Admin\LoginController@logout')->name('admin.logout');

//shopping cart routes
Route::get('/add-to-cart/{id}', 'User\AddToCartController@getAddToCart')->name('product.addToCart');
//Route::get('/shopping-cart', 'User\AddToCartController@getShoppingCart')->name('product.shoppingCart');

Route::get('/cart', 'User\CartController@index')->name('product.shoppingCart');
Route::get('/delete', 'User\CartController@delete')->name('delete.shoppingCart');
Route::get('/wishlist', 'User\CartController@wishlist')->name('user.wishlist');
Route::patch('/cart/{product}', 'User\CartController@update')->name('cart.update');
Route::post('/cart', 'User\CartController@store')->name('cart.store');
Route::delete('/cart/{product}', 'User\CartController@destroy')->name('cart.destroy');
Route::post('/cart/wishlist/{product}', 'User\CartController@switchToSaveForLater')->name('cart.switchToSaveForLater');

Route::post('/wishlist', 'User\SaveForLaterController@store')->name('saveForLater.store');
Route::delete('/wishlist/{product}', 'User\SaveForLaterController@destroy')->name('saveForLater.destroy');
Route::post('/wishlist/switchToCart/{product}', 'User\SaveForLaterController@switchToCart')->name('saveForLater.switchToCart');

Route::post('/coupon', 'CouponsController@store')->name('coupon.store');
Route::delete('/coupon', 'CouponsController@destroy')->name('coupon.destroy');




//load subcategories
Route::get('/submission/getSubCategories/{id}', 'User\ProductController@getSubCategories')->name('sub_categories');
Route::get('/product-details/{product_id}', 'User\ProductController@productDetails')->name('product.details');
Route::get('/products-category/{id}', 'User\ProductController@productCategory')->name('product.category');


Route::get('/products-occasion/{name}', 'User\ProductController@productOccasion')->name('product.occasion');
Route::get('/products-type/{name}', 'User\ProductController@productType')->name('product.type');



//User blog routes
Route::get('blog/posts', 'User\BlogPostController@getAllPosts')->name('user.blog.posts');
Route::get('blog/{slug}', 'User\BlogPostController@showPost')->name('user.show.posts');

Route::group(['middleware' => 'user'], function () {

    Route::get('/user-products', 'User\UserProfileController@userProducts')->name('user.products');
    Route::get('/user-orders', 'User\UserProfileController@userOrders')->name('user.orders');
    Route::get('/user-profile-edit', 'User\UserProfileController@editProfile')->name('user.profile.edit');
    Route::post('/user/profile-edit', 'User\UserProfileController@userEditSubmit')->name('user.edit.submit');
    Route::post('/user/password-update', 'User\UserProfileController@userUpdatePassword')->name('user.update.submit');
    Route::get('/user-password-edit', 'User\UserProfileController@editPassword')->name('user.password.edit');
    Route::get('/user-profile-delete', 'User\UserProfileController@deleteProfile')->name('user.profile.delete');
    Route::get('/user-pending-products', 'User\UserProfileController@pendingProducts')->name('user.pending.products');
    Route::get('/user-suspended-products', 'User\UserProfileController@suspendedProducts')
        ->name('user.suspended.products');

    //checkout routes
    Route::get('/check-out', 'User\AddToCartController@getCheckOut')->name('checkout');
    Route::post('/check-out', 'User\AddToCartController@postCheckout')->name('checkout.pay');

    Route::get('/checkout', 'User\CheckoutController@index')->name('checkout.index');
    Route::post('/checkout', 'User\CheckoutController@store')->name('checkout.store');
    Route::get('/thankyou', 'User\ConfirmationController@index')->name('confirmation.index');


    //review routes
    Route::post('review', 'User\ReviewsController@productReview')->name('user.review.submit');

    Route::post('comment', 'User\BlogPostController@postComment')->name('user.comment.submit');

    //company Routes
    Route::get('/user/add-product', 'User\ProductController@newProduct')->name('product.create');
    Route::post('/user/product', 'User\ProductController@postProduct')->name('product.submit.post');
    Route::get('/product/edit/{id}', 'User\ProductController@editProduct')->name('product.edit');
    Route::post('/product/edit', 'User\ProductController@submitEdit')->name('product.edit.submit');


});

Route::group(['middleware' => 'admin'], function () {
    //dashboard
    Route::get('/admin/dashboard', 'Admin\DashboardController@index')->name('admin.dashboard');

    //sales
    Route::get('/admin/product-sales', 'Admin\SalesController@displaySales')->name('product.sales');

    //users
    Route::get('/admin/users', 'Admin\DashboardController@allUsers')->name('admin.users');

    //requests routes admin
    Route::get('/admin/all-requests', 'Admin\RequestController@serviceRequests')->name('admin.product.requests');

    //Products
    Route::get('/admin/all-products', 'Admin\ProductController@allProducts')->name('admin.all-products');
    Route::get('/admin/new-product', 'Admin\ProductController@newProducts')->name('admin.new-product');
    Route::post('/admin/new-products', 'Admin\ProductController@postProduct')->name('admin.post-products');
    Route::get('/admin/edit-product/{id}', 'Admin\ProductController@editProduct')->name('admin.product.edit');
    Route::post('/admin/edit-products', 'Admin\ProductController@submitEdit')->name('admin.post.product.edit');
    Route::get('/admin/pending-products', 'Admin\ProductController@pendingProducts')
        ->name('admin.pending.products');
    Route::get('/admin/approve-products/{id}', 'Admin\ProductController@approveProducts')
        ->name('admin.product.approve');
    Route::get('/admin/featured-products', 'Admin\ProductController@featuredProducts')
        ->name('admin.featured.products');


    Route::get('/admin/advert-Banners', 'Admin\AdvertController@showBanners')->name('admin.banner.list');
    Route::get('/admin/new-advert-Banners', 'Admin\AdvertController@newBanners')->name('admin.create.banner.form');
    Route::post('/admin/new-advert-Banners', 'Admin\AdvertController@postBanners')->name('admin.post.banner.form');
    Route::get('/admin/edit-advert-Banners/{id}', 'Admin\AdvertController@editBanners')->name('admin.edit.banner.form');
    Route::post('/admin/edit-advert-Banners', 'Admin\AdvertController@postEditBanners')->name('admin.edit.banner');
    Route::get('/admin/delete-advert-Banners/{id}', 'Admin\AdvertController@delete')->name('admin.banner.delete');
    Route::post('/admin/delete-advert-Banners', 'Admin\AdvertController@destroy')->name('admin.banner.destroy');

    //Feature Service
    Route::get('/admin/feature-product', 'Admin\FeatureProductsController@featureProduct')->name('feature.product');
    Route::get('/admin/get-featured-products', 'Admin\FeatureProductsController@getFeatured')->name('featured.products');

    //Show in banner
    Route::get('/show-in-banner','Admin\ShowInBannerController@showInBanner')
        ->name('show.in.banner');
    Route::get('/get-showing-in-banner','Admin\ShowInBannerController@getShowInBanner')
        ->name('get.show.in.banner');

    //Top Viewed Ad
    Route::get('/top-viewed-ad','Admin\TopViewedController@topViewed')
        ->name('top.viewed.ad');
    Route::get('/get-top-viewed-ad','Admin\TopViewedController@getTopViewed')
        ->name('get.top.viewed.ad');


    //Admin news letter routes
    Route::get('/admin/news-letters', 'Admin\NewsLetterController@createNewsLetter')
        ->name('admin.create.news.letter.form');
    Route::post('/admin/news-letters', 'Admin\NewsLetterController@saveNewsLetter')
        ->name('admin.create.news.letter.submit');
    Route::get('/admin/subscribers', 'Admin\NewsLetterSubscribersController@getSubscribers')
        ->name('admin.subscribers.listings');

    //Admin blog routes
    Route::get('/admin/blog', 'Admin\BlogPostController@createPost')->name('admin.create.post.form');
    Route::post('/admin/blog', 'Admin\BlogPostController@savePost')->name('admin.create.post.submit');
    Route::get('/admin/blog/posts', 'Admin\BlogPostController@getAllPosts')->name('admin.blog.list');
    Route::get('/admin/blog/posts/{id}/edit', 'Admin\BlogPostController@edit')->name('admin.post.edit.form');
    Route::post('/admin/blog/posts/edit', 'Admin\BlogPostController@save')->name('admin.post.edit.submit');
    Route::get('/admin/blog/posts/{id}/delete', 'Admin\BlogPostController@delete')->name('admin.post.delete');
    Route::post('/admin/blog/posts/delete', 'Admin\BlogPostController@destroy')->name('admin.post.destroy');

    //Admin blog routes
    Route::get('/admin/gallery', 'Admin\GalleryController@addGallery')->name('admin.create.gallery.form');
    Route::post('/admin/gallery', 'Admin\GalleryController@saveGallery')->name('admin.create.gallery.submit');
    Route::get('/admin/gallery-listing', 'Admin\GalleryController@allGallery')->name('admin.gallery.list');
    /*Route::get('/admin/blog/posts', 'Admin\BlogPostController@getAllPosts')->name('admin.blog.list');
    Route::get('/admin/blog/posts/{id}/edit', 'Admin\BlogPostController@edit')->name('admin.post.edit.form');
    Route::post('/admin/blog/posts/edit', 'Admin\BlogPostController@save')->name('admin.post.edit.submit');
    Route::get('/admin/blog/posts/{id}/delete', 'Admin\BlogPostController@delete')->name('admin.post.delete');
    Route::post('/admin/blog/posts/delete', 'Admin\BlogPostController@destroy')->name('admin.post.destroy');*/

    //Categories routes
    Route::get('/admin/all-categories', 'Admin\CategoriesController@showAll')->name('admin.all.categories');
    Route::get('/admin/new-categories', 'Admin\CategoriesController@categoriesForm')->name('admin.new.category');
    Route::post('/admin/categories', 'Admin\CategoriesController@submitCategory')->name('admin.new.category.submit');
    Route::get('/admin/category/{id}/edit', 'Admin\CategoriesController@edit')->name('admin.category.edit');
    Route::post('/admin/category/edit', 'Admin\CategoriesController@editSubmit')->name('admin.category.edit.submit');
    Route::get('/admin/category/{id}/delete', 'Admin\CategoriesController@delete')->name('admin.category.delete');
    Route::post('/admin/category/delete', 'Admin\CategoriesController@destroy')->name('admin.category.destroy');

    //Sub-Categories routes
    Route::get('/admin/all-sub-categories', 'Admin\SubCategoriesController@showAll')
        ->name('admin.all.subcategories');
    Route::get('/admin/sub-categories', 'Admin\SubCategoriesController@subcategoriesForm')
        ->name('admin.new.subcategory');
    Route::post('/admin/sub-categories', 'Admin\SubCategoriesController@submitCategory')
        ->name('admin.new.subcategory.submit');
    Route::get('/admin/sub-category/{id}/edit', 'Admin\SubCategoriesController@edit')
        ->name('admin.subcategory.edit');
    Route::post('/admin/sub-category/edit', 'Admin\SubCategoriesController@editSubmit')
        ->name('admin.subcategory.edit.submit');
    Route::get('/admin/sub-category/{id}/delete', 'Admin\SubCategoriesController@delete')
        ->name('admin.subcategory.delete');
    Route::post('/admin/sub-category/delete', 'Admin\SubCategoriesController@destroy')
        ->name('admin.subcategory.destroy');

    //sponsors route
    Route::get('/admin/sponsors','Admin\PartnersController@getAllPartners')
        ->name('admin.sponsors.listings');
    Route::get('/admin/sponsors/create','Admin\PartnersController@showNewPartnersForm')
        ->name('admin.sponsors.new.form');
    Route::post('/admin/sponsors/save','Admin\PartnersController@saveNewPartner')
        ->name('admin.sponsors.new.submit');
    Route::get('/admin/sponsors/{id}/edit','Admin\PartnersController@edit')
        ->name('admin.sponsors.edit.form');
    Route::post('/admin/sponsors/edit','Admin\PartnersController@saveEdit')
        ->name('admin.sponsors.edit.save');
    Route::get('/admin/sponsors/{id}/delete','Admin\PartnersController@delete')
        ->name('admin.sponsors.delete');
    Route::post('/admin/sponsors/delete','Admin\PartnersController@destroy')
        ->name('admin.sponsors.destroy');

    //types routes
    Route::get('/admin/types', 'Admin\TypesController@showAll')->name('admin.all.types');
    Route::get('/admin/type/new', 'Admin\TypesController@typeForm')->name('admin.new.type');
    Route::post('/admin/type', 'Admin\TypesController@submitType')->name('admin.new.type.submit');
    Route::get('/admin/type/{id}/edit', 'Admin\TypesController@edit')->name('admin.type.edit');
    Route::post('/admin/type/edit', 'Admin\TypesController@editSubmit')->name('admin.type.edit.submit');
    Route::get('/admin/type/{id}/delete', 'Admin\TypesController@delete')->name('admin.type.delete');
    Route::post('/admin/type/delete', 'Admin\TypesController@destroy')->name('admin.type.destroy');

    //Occasion routes
    Route::get('/admin/occasion', 'Admin\OccasionsController@showAll')->name('admin.all.occasions');
    Route::get('/admin/occasion/new', 'Admin\OccasionsController@typeForm')->name('admin.new.occasion');
    Route::post('/admin/occasion', 'Admin\OccasionsController@submitType')->name('admin.new.occasion.submit');
    Route::get('/admin/occasion/{id}/edit', 'Admin\OccasionsController@edit')->name('admin.occasion.edit');
    Route::post('/admin/occasion/edit', 'Admin\OccasionsController@editSubmit')->name('admin.occasion.edit.submit');
    Route::get('/admin/occasion/{id}/delete', 'Admin\OccasionsController@delete')->name('admin.occasion.delete');
    Route::post('/admin/occasion/delete', 'Admin\OccasionsController@destroy')->name('admin.occasion.destroy');



});

