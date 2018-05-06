<?php

namespace App\Http\Controllers\Admin;

use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TopViewedController extends Controller
{

    function topViewed(){
        $res = array();
        $message = "";
        $error = "";
        $status = "";

        $product_id = $_GET['product_id'];

        $state = $_GET['state'];

        if($state == 1){
            $product = Product::find($product_id);

            $product->top_viewed = 1;

            $product->save();

            $error = 0;
            $status = 1;
            $message = "Product showing in Top Viewed";
        }elseif($state == 0){
            $product = Product::find($product_id);

            $product->top_viewed = 0;

            $product->save();

            $error = 0;
            $status = 2;
            $message = "Product not showing in Top Viewed";
        }else{
            $error = 0;
            $status = 3;
            $message = "Banner state unknown";
        }

        $res['error'] = $error;
        $res['status'] = $status;
        $res['message'] = $message;

        return json_encode($res);
    }

    function getTopViewed(){

        $products = Product::where('top_viewed',1)->get();

        $res = array();

        $product_array = array();
        foreach ($products as $product) {
            array_push($product_array,$product->id);
        }

        $res["banner"] = $product_array;
        return json_encode($res);

    }


}
