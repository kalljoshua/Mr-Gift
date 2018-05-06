<?php

namespace App\Http\Controllers\User;

use App\Banner;
use App\GalleryPhoto;
use App\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;
use App\Product;
use App\Occassion;
use App\Review;
use App\Service;
use App\SavedSearch;


class HomeController extends Controller
{
    //
    public function index()
    {
        $categories = Occassion::all();
        $featured_products = Product::where('featured',1)->where('active',1)->get();
        $most_viewed = Product::orderBy('views','DESC')->where('active',1)->take(3)->get();
        $posts = Post::orderBy('created_at','DESC')->where('active',1)->take(3)->get();
        $topViewed = Product::where('top_viewed',1)->where('active',1)->first();
        $banners = Banner::where('active',1)->get();
        return view('user.index')
            ->with('featured_products',$featured_products)
            ->with('most_viewed',$most_viewed)
            ->with('posts',$posts)
            ->with('banners',$banners)
            ->with('topViewed',$topViewed)
            ->with('categories',$categories);
    }

    function loadMoreSubCategories(Request $request)
    {
        $subObject = array();
        $subArr = array();

        $categoryId = $request->input('category_id');

        $category = Category::find($categoryId);

        $count = $category->sub_category->count();

        $count = $count - 3;

        $subCategory = $category->sub_category()->orderBy('created_at', 'DESC')->take($count)->skip(3)->get();

        foreach ($subCategory as $sub) {
            $subObject["id"] = $sub->id;
            $subObject["name"] = $sub->name;
            $subObject["companies"] = $sub->companies->count();
            array_push($subArr, $subObject);
        }

        return $subArr;
    }

    function loadMoreCategories(){
        $c = array();
        $resp = array();
        $all = Category::all()->count();

        //return $subs;

        $count = $all - 8;

        $categories = Category::take($count)->skip(8)->get();

        foreach ($categories as $category){
            $subarr = array();
            $c["id"] = $category->id;
            $c["name"] = $category->name;

            $subCategories = $category->sub_category()->orderBy('created_at', 'DESC')->take(3)->get();
            foreach ($subCategories as $subCategory){
                $sarr = array();
                $sarr["id"] = $subCategory->id;
                $sarr["category_id"] = $subCategory->category_id;
                $sarr["name"] = $subCategory->name;
                $sarr["companies"] = $subCategory->companies->count();
                array_push($subarr,$sarr);
            }

            $c["sub_categories"] = $subarr;

            array_push($resp,$c);
        }

        return $resp;
    }

    function adsDetails(Request $request, $id)
    {
        $service = Service::find($id);
        $service->increment('views');
        //return $service;
        return view('user.ads_details')->with('service', $service);
    }

    function displayGallery()
    {
        $gallery = GalleryPhoto::all();
        return view('user.user_gallery')
            ->with('gallery', $gallery);
    }

    function privacy()
    {
        return view('user.security_privacy');
    }

    function contact()
    {
        return view('user.contact_us');
    }

    function about()
    {
        return view('user.about_us');
    }

    function personalsafety()
    {
        return view('user.personalsafety');
    }

    function secureShopping()
    {
        return view('user.secure_shopping');
    }

    function termsofUse()
    {
        return view('user.terms_of_conditions');
    }

    function faq()
    {
        return view('user.faq');
    }

    function sellWithUs()
    {
        return view('user.sell_with_us');
    }

    function reward()
    {
        return view('user.rewards');
    }

    function affiliates()
    {
        return view('user.affiliates');
    }

    function whyUs()
    {
        return view('user.why_us');
    }

    function newDeal()
    {
        return view('user.new_deals');
    }

    function delivery()
    {
        return view('user.delivery_info');
    }

    function storeLocation()
    {
        return view('user.store_location');
    }

}
