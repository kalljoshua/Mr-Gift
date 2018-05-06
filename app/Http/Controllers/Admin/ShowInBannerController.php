<?php

namespace App\Http\Controllers\Admin;

use App\Banner;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;

class ShowInBannerController extends Controller
{
    function showInBanner(){
        $res = array();
        $message = "";
        $error = "";
        $status = "";

        $product_id = $_GET['product_id'];

        $state = $_GET['state'];

        if($state == 1){
            $product = Banner::find($product_id);

            $product->active = 1;

            $product->save();

            $error = 0;
            $status = 1;
            $message = "Product showing in banner";
        }elseif($state == 0){
            $product = Banner::find($product_id);

            $product->active = 0;

            $product->save();

            $error = 0;
            $status = 2;
            $message = "Product not showing in banner";
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

    function getShowInBanner(){

        $products = Banner::where('active',1)->get();

        $res = array();

        $product_array = array();
        foreach ($products as $product) {
            array_push($product_array,$product->id);
        }

        $res["banner"] = $product_array;
        return json_encode($res);

    }
}
