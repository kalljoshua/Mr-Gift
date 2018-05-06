<?php

namespace App\Http\Controllers\Admin;

use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;
use App\Banner;

class AdvertController extends Controller
{
    function showBanners()
    {
        $adverts = Banner::all();
        return view('admin.advert_banner')
            ->with('banners',$adverts);
    }

    function newBanners()
    {
        $products = Product::all();
        return view('admin.new_banner_advert')
            ->with('products',$products);
    }

    function editBanners($id)
    {
        $banner = Banner::find($id);
        $products = Product::all();
        return view('admin.edit_banner_form')
            ->with('products',$products)
            ->with('banner',$banner);
    }

    function postBanners(Request $request)
    {
        $banner = new Banner();

        $banner->title = $request->input('title');
        $banner->product_id = $request->input('product_id');
        $banner->offer = $request->input('offer');
        $banner->price = $request->input('price');


        if($request->hasFile('photo')){
            $photoName = $request->input('title').'.'.$request->photo->extension();

            $photoName = str_replace(' ', '_', $photoName);

            if($path = $request->photo->move(public_path().'/cache_uploads/', $photoName)){

                $banner->image = $photoName;

                $banner->save();

                $path = public_path().'/cache_uploads/'.$photoName;

                $this->resizePostImage($path,$photoName);

                flash('Banner added successfully')->success();

                return redirect(route('admin.banner.list'));

            }else{
                flash('file error')->success();

                return redirect(route('admin.create.banner.form'));
            }
        }else{
            flash('No image picked')->success();

            return redirect(route('admin.create.banner.form'));
        }


    }

    function postEditBanners(Request $request)
    {
        $banner = Banner::find($request->input('id'));

        $banner->title = $request->input('title');
        $banner->product_id = $request->input('product_id');
        $banner->offer = $request->input('offer');
        $banner->price = $request->input('price');

        if($request->hasFile('photo')){
            $photoName = $request->input('title').'.'.$request->photo->extension();

            $photoName = str_replace(' ', '_', $photoName);

            if($path = $request->photo->move(public_path().'/cache_uploads/', $photoName)){

                $banner->image = $photoName;

                $path = public_path().'/cache_uploads/'.$photoName;

                $this->resizePostImage($path,$photoName);

            }
        }

        if($banner->save()){
            flash('Changes saved successfully')->success();
            return redirect(route('admin.banner.list'));
        }else{
            flash('Failed to save changes')->success();
            return redirect(route('admin.banner.list'));
        }
    }

    function delete(Request $request, $id){
        $banner = Banner::find($id);
        return view('admin.admin_delete_banner_post')
            ->with('post',$banner);
    }

    function destroy(Request $request){

        $id = $request->input('id');

        if(Banner::destroy($id)){
            flash('Banner deleted successfully')->success();
            return redirect()->route('admin.banner.list');
        }else{
            flash('Failed to delete banner')->error();
            return redirect()->route('admin.banner.list');
        }
    }




    function resizePostImage($path,$image_name)
    {

        ini_set('memory_limit','256M');
        ini_set('max_execution_time', 600);

        $image_path = $path;

        Image::make($image_path)
            ->resize(810, 400)
            ->save(public_path().'/images/advert/advert_810x400/'.$image_name);

        Image::make($image_path)
            ->resize(403, 402)
            ->save(public_path().'/images/advert/advert_403x402/'.$image_name);

        Image::make($image_path)
            ->resize(99, 99)
            ->save(public_path().'/images/advert/admin_listing_99x99/'.$image_name);

    }
}
