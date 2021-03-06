<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use App\Review;
use Input, Auth;

class ReviewsController extends Controller
{
    //
    function productReview(){
        $review = new Review();
        $product_rating = Product::find(Input::get('product_id'));
        $review->product_id  = Input::get('product_id');
        $review->rating  = Input::get('rating');
        $review->review  = Input::get('review');
        if(Auth::guard('user')->check()){
            $review->user_id  = Auth::guard('user')->id();

            $id = Input::get('product_id');

            if($review->save()){

                $rate = Review::where('product_id',Input::get('product_id'))->get();
                $i = 0;
                $j = 0;
                $r = sizeof($rate);
                foreach ($rate as $rates){
                    while ($i<$r){
                        $j=$j+$rate[$i]['rating']; $i++;
                    }
                }
                if($j>0){
                    $av = round($j/$r);
                    $product_rating->rating = round($j/$r);
                }else{
                    $product_rating->rating = 0;
                }

                //return $av;
                if($product_rating->save())
                    flash('Your review and rating was added successfully')->success();
                return redirect()->back();
            }
        }else{
            flash('Please Login before adding review')->success();
            return redirect(route('user.login.register'));
        }
    }
}
