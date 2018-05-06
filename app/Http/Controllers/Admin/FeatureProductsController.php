<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;

class FeatureProductsController extends Controller
{
    function featureProduct(){
        $res = array();
        $message = "";
        $error = "";
        $status = "";

        $product_id = $_GET['product_id'];

        $state = $_GET['state'];

        if($state == 1){
            $product = Product::find($product_id);

            $product->featured = 1;

            $product->save();

            $error = 0;
            $status = 1;
            $message = "Product featured";
        }elseif($state == 0){
            $product = Product::find($product_id);

            $product->featured = 0;

            $product->save();

            $error = 0;
            $status = 2;
            $message = "Product unfeatured";
        }else{
            $error = 0;
            $status = 3;
            $message = "Featuring state unknown";
        }

        $res['error'] = $error;
        $res['status'] = $status;
        $res['message'] = $message;

        return json_encode($res);
    }

    function getFeatured(){

        $products = Product::where('featured',1)->get();

        $res = array();

        $product_array = array();
        foreach ($products as $product) {
            array_push($product_array,$product->id);
        }

        $res["featured"] = $product_array;
        return json_encode($res);

    }
}
