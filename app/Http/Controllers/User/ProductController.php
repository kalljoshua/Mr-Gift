<?php

namespace App\Http\Controllers\User;

use App\Category;
use App\Occassion;
use App\ProductImage;
use App\Type;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;
use Illuminate\Http\Resources\Json;
use Input, Redirect, DB;
use App\SubCategory;
use App\Product;
use App\ProductFeature;

class ProductController extends Controller
{
    //
    function newProduct()
    {
        return view('user.new_product');
    }

    function productDetails($product_id)
    {
        $product = Product::where('id',$product_id)->first();
        if(is_null($product)){
            flash('Product was not found')->warning();
            return redirect()->back();
        }
        $product->increment('views');

        $related_products = Product::where('occassion_id', $product->occassion_id)
            ->where('id','!=',$product->id)->where('active',1)
            ->orderBy('created_at','DESC')->get();
        $most_viewed = Product::orderBy('views','DESC')->where('active',1)->get();
        return view('user.product_details')
            ->with('most_viewed',$most_viewed)
            ->with('product',$product)
            ->with('related_products',$related_products);

    }
    function productCategory($id)
    {
        $category = SubCategory::where('id',$id)->first();
        $most_viewed = Product::orderBy('views','DESC')->where('active',1)->get();
        $product = Product::where('sub_category_id',$id)->where('active',1)
            ->orderBy('created_at','DESC')->paginate(9);
        return view('user.product_category')
            ->with('most_viewed',$most_viewed)
            ->with('category',$category)
            ->with('products', $product);

    }

    function productOccasion($name)
    {
        $occasion = Occassion::where('name',$name)->first();
        $products = Product::where('occassion_id',$occasion->id)->where('active',1)
            ->orderBy('created_at','DESC')->paginate(9);
        return view('user.product_occasion')
            ->with('occasion',$occasion)
            ->with('products',$products);
    }

    function productType($name)
    {
        $type = Type::where('name',$name)->first();
        $products = Product::where('type_id',$type->id)->where('active',1)
            ->orderBy('created_at','DESC')->paginate(9);
        return view('user.product_type')
            ->with('type',$type)
            ->with('products',$products);
    }

    public function getSubCategories(Request $request, $id){
        if($request->ajax()){

            $sector = SubCategory::where('category_id',$id)->get();
            return $sector;
            return Response::json( $sector );;

        }
    }


    function editProduct($id)
    {
        $product = Product::where('id',$id)->first();
        return view('user.edit_product')
            ->with('product',$product);
    }

    function postProduct(Request $request)
    {

        if(!empty($request->feature))$features = array_filter($request->feature);


        ini_set('memory_limit', '256M');
        ini_set('max_execution_time', 600);
        $user_id = Auth::guard('user')->id();

        $product = new Product();

        $product->user_id = Auth::guard('user')->id();
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
            return redirect(route('user.products'));
        }else{
            flash('Failed to add product')->warning();
            return redirect(route('user.products'));
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
            return redirect(route('user.products'));
        } else {
            flash('Failed to update Product')->warning();
            return redirect(route('user.products'))
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
