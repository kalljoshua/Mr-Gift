<?php

namespace App\Http\Controllers\Admin;

use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;
use Illuminate\Http\Resources\Json;
use Input, Redirect, DB;
use App\SubCategory;
use App\ProductFeature;
use App\ProductImage;
use App\Type;

class ProductController extends Controller
{

    function allProducts()
    {
        $products = Product::all();
        return view('admin.all_products')
            ->with('products',$products);
    }

    function pendingProducts()
    {
        $products = Product::where('active',0)->get();
        return view('admin.pending_products')
            ->with('products',$products);
    }

    function featuredProducts()
    {
        $products = Product::where('featured',1)->get();
        return view('admin.featured_products')
            ->with('products',$products);
    }

    function approveProducts($id)
    {

        $product = Product::find($id);

        $product->active = 1;

        if($product->save()){
            flash('Product approved successfully')->success();
            return redirect()->route('admin.pending.products');
        }else{
            flash('Failed to approve Product')->error();
            return redirect()->route('admin.pending.products');
        }
    }

    function newProducts()
    {
        return view('admin.add_product');
    }

    function editProduct($id)
    {
        $product = Product::where('id',$id)->where('user_type',1)->first();
        return view('admin.edit_product')
            ->with('product',$product);
    }

    function postProduct(Request $request)
    {

        if(!empty($request->feature))$features = array_filter($request->feature);


        ini_set('memory_limit', '256M');
        ini_set('max_execution_time', 600);
        $product = new Product();

        $product->user_id = Auth::guard('admin')->id();
        $product->user_type= 1;
        $product->active= 1;
        if(Input::has('name')) $product->name = Input::get('name');
        if(Input::has('description')) $product->description = Input::get('description');
        if(Input::has('price')) $product->price = Input::get('price');
        if(Input::has('occassion_id')) $product->occassion_id = Input::get('occassion_id');
        if(Input::has('type_id')) $product->type_id = Input::get('type_id');
        if(Input::has('sub_category_id')) $product->sub_category_id = Input::get('sub_category_id');
        if(Input::has('category_id')) $product->category_id = Input::get('category_id');
        if(Input::has('sizes')) $product->sizes = Input::get('sizes');
        if(Input::has('colors')) $product->colors = Input::get('colors');
        $product->slug = str_replace(' ', '-',str_replace('.',' ',str_replace('/',' ',addslashes(Input::get('name')))));
        $product->image = "no image";
        $i = 1;

        if($product->save())
        {
            $cur_product = product::find($product->id);

            if(!empty($request->image)){
                $images = array_filter($request->image);

                foreach ($images as $imagename) {
                    $image = $product->name . "" . $i . "." . $imagename->extension();
                    $image = str_replace(' ', '_', $image);
                    $path = $imagename->move(public_path() . '/cache_uploads/' . $image);

                    $this->resize_image($path, $image);
                    $product_image = new ProductImage(['image' => $image]);

                    //execute to set main property image
                    if ($cur_product->image == 'no image') {
                        $cur_product->image = $image;
                        $cur_product->save();
                    } else {
                        $cur_product->images()->save($product_image);
                    }


                    //sleep(1);
                    $i = $i + 1;
                }
            }

            foreach ($features as $cs) {
                $s = new ProductFeature();
                //$service = new Service(['title',$product_service]);
                $s->title = $cs;
                $s->product_id = $insertedId = $product->id;

                $s->save();
            }


            flash('product has successfully been added.')->success();
            return redirect(route('admin.all-products'));
        }else{
            flash('Failed to add product')->error();
            return redirect(route('admin.new-products'));
        }


    }

    function submitEdit(Request $request)
    {

        if ($request->id) $id = $request->id;
        $product = Product::find($id);
        $features = array_filter($request->feature);

        ini_set('memory_limit', '256M');
        ini_set('max_execution_time', 600);


        if(Input::has('name')) $product->name = Input::get('name');
        if(Input::has('description')) $product->description = Input::get('description');
        if(Input::has('price')) $product->price = Input::get('price');
        if(Input::has('occassion_id')) $product->occassion_id = Input::get('occassion_id');
        if(Input::has('type_id')) $product->type_id = Input::get('type_id');
        if(Input::has('sub_category_id')) $product->sub_category_id = Input::get('sub_category_id');
        if(Input::has('category_id')) $product->category_id = Input::get('category_id');
        if(Input::has('sizes')) $product->sizes = Input::get('sizes');
        if(Input::has('colors')) $product->colors = Input::get('colors');
        $product->image = "no image";
        //return $company;
        $product->slug = str_replace(' ', '-', str_replace('.', ' ', str_replace('/', ' ', addslashes(Input::get('name')))));
        $i = 1;


        if ($product->save()) {
            $cur_product = product::find($product->id);

            if(!empty($request->image)){
                $images = array_filter($request->image);

                foreach ($images as $imagename) {
                    $image = $product->name . "" . $i . "." . $imagename->extension();
                    $image = str_replace(' ', '_', $image);
                    $path = $imagename->move(public_path() . '/cache_uploads/' . $image);

                    $this->resize_image($path, $image);
                    $product_image = new ProductImage(['image' => $image]);

                    //execute to set main property image
                    if ($cur_product->image == 'no image') {
                        $cur_product->image = $image;
                        $cur_product->save();
                    } else {
                        $cur_product->images()->save($product_image);
                    }


                    //sleep(1);
                    $i = $i + 1;
                }
            }
            if(ProductFeature::where('product_id',$product->id)->count()<1){
                foreach ($features as $cs) {
                    $s = new ProductFeature();
                    //$service = new Service(['title',$product_service]);
                    $s->title = $cs;
                    $s->product_id = $insertedId = $product->id;

                    $s->save();
                }


            }else {

                if (ProductFeature::where('product_id', $product->id)->delete()) {
                    foreach ($features as $cs) {
                        $s = new ProductFeature();
                        //$service = new Service(['title',$product_service]);
                        $s->title = $cs;
                        $s->product_id = $insertedId = $product->id;

                        $s->save();
                    }

                }
            }
            flash('Product has successfully been Updated.')->success();
            return redirect(route('admin.all-products'));
        } else {
            flash('Failed to update Product')->warning();
            return redirect(route('admin.all-products'))
                ->withInput(Input::all());
        }



    }





    function resize_image($image, $photoName)
    {
        ini_set('memory_limit', '256M');
        ini_set('max_execution_time', 600);

        $image_path = $image;

        Image::make($image_path)
            ->resize(99, 99)
            ->save(public_path() . '/images/products/bottom_slider_99x99/' . $photoName);

        Image::make($image_path)
            ->resize(370, 202)
            ->save(public_path() . '/images/products/featured_slider_370x202/' . $photoName);

        Image::make($image_path)
            ->resize(355, 240)
            ->save(public_path() . '/images/products/latest_home_and_best_services_355x240/' . $photoName);

        Image::make($image_path)
            ->resize(50, 50)
            ->save(public_path() . '/images/products/latest_reviews_50x50/' . $photoName);

        Image::make($image_path)
            ->resize(100, 75)
            ->save(public_path() . '/images/products/others_100x75/' . $photoName);

        Image::make($image_path)
            ->resize(370, 370)
            ->save(public_path() . '/images/products/our_location_370x370/' . $photoName);

        Image::make($image_path)
            ->resize(770, 370)
            ->save(public_path() . '/images/products/our_location_770x370/' . $photoName);

        Image::make($image_path)
            ->resize(2000, 440)
            ->save(public_path() . '/images/products/parallax_banner_2000x1440/' . $photoName);

        Image::make($image_path)
            ->resize(364, 244)
            ->save(public_path() . '/images/products/service_listing_364x244/' . $photoName);

        Image::make($image_path)
            ->resize(1170, 600)
            ->save(public_path() . '/images/products/single_service_1170x600/' . $photoName);

        Image::make($image_path)
            ->resize(1423, 603)
            ->save(public_path() . '/images/products/banner_1423x603/' . $photoName);

        Image::make($image_path)
            ->resize(150, 110)
            ->save(public_path() . '/images/products/user_services_150x110/' . $photoName);

        Image::make($image_path)
            ->resize(120, 120)
            ->save(public_path() . '/images/products/user_services_120x120/' . $photoName);


    }

}
