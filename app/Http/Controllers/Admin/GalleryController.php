<?php

namespace App\Http\Controllers\Admin;

use App\GalleryPhoto;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;
use Input, Redirect, DB;

class GalleryController extends Controller
{

    function addGallery()
    {
        return view('admin.add_gallery');
    }

    function allGallery()
    {
        $gallery = GalleryPhoto::all();
        return view('admin.all_gallery')
            ->with('gallery',$gallery);
    }

    function saveGallery(Request $request)
    {
        $gallery = new GalleryPhoto();
        if(Input::has('title')) $gallery->title = Input::get('title');
        if(Input::has('video_link')) $gallery->video_link = Input::get('video_link');
        if(Input::has('description')) $gallery->description = Input::get('description');
        $gallery->image = "no image";
        if ($gallery->save()){

            $gallery_photo = GalleryPhoto::find($gallery->id);

            if($request->hasFile('photo')){
                $photoName = $request->input('title').'.'.$request->photo->extension();

                $photoName = str_replace(' ', '_', $photoName);

                if($path = $request->photo->move(public_path().'/cache_uploads/', $photoName)){

                    if ($gallery_photo->image == 'no image') {
                        $gallery_photo->image = $photoName;
                        $gallery_photo->save();
                    }

                    $path = public_path().'/cache_uploads/'.$photoName;

                    $this->resizePostImage($path,$photoName);

                    flash('Gallery added successfully')->success();

                    return redirect(route('admin.create.gallery.form'));

                }else{
                    flash('file error')->success();

                    return redirect(route('admin.create.gallery.form'));
                }
            }

            flash('Gallery added successfully')->success();

            return redirect(route('admin.create.gallery.form'));
        }

    }

    function edit($id){

        $gallery = GalleryPhoto::find($id);

        return view('admin.edit_gallery_form')
            ->with('gallery',$gallery);
    }

    function save(Request $request){

        $gallery = GalleryPhoto::find($request->input('id'));


        $title = $request->input('title');
        $description = $request->input('description');
        $video_link = $request->input('video_link');

        if($title != "")
            $gallery->title = $title;

        if($description != "")
            $gallery->description = $description;

        if($video_link != "")
            $gallery->video_link = $video_link;



        if($request->hasFile('photo')){
            $photoName = $request->input('title').'.'.$request->photo->extension();

            $photoName = str_replace(' ', '_', $photoName);

            if($path = $request->photo->move(public_path().'/cache_uploads/', $photoName)){

                $gallery->image = $photoName;

                $path = public_path().'/cache_uploads/'.$photoName;

                $this->resizePostImage($path,$photoName);

            }
        }

        if($gallery->save()){
            flash('Changes saved successfully')->success();
            return redirect(route('admin.gallery.list'));
        }else{
            flash('Failed to save changes')->success();
            return redirect(route('admin.gallery.list'));
        }

    }

    function delete(Request $request, $id){
        $gallery = GalleryPhoto::find($id);
        return view('admin.admin_delete_gallery')
            ->with('gallery',$gallery);
    }

    function destroy(Request $request){

        $id = $request->input('id');

        if(GalleryPhoto::destroy($id)){
            flash('Post deleted successfully')->success();
            return redirect()->route('admin.gallery.list');
        }else{
            flash('Failed to delete post')->error();
            return redirect()->route('admin.gallery.list');
        }
    }






    function resizePostImage($path,$image_name)
    {

        ini_set('memory_limit','256M');
        ini_set('max_execution_time', 600);

        $image_path = $path;

        Image::make($image_path)
            ->resize(810, 400)
            ->save(public_path().'/images/gallery/user_810x400/'.$image_name);

        Image::make($image_path)
            ->resize(400, 400)
            ->save(public_path().'/images/gallery/user_400x400/'.$image_name);

        Image::make($image_path)
            ->resize(99, 99)
            ->save(public_path().'/images/gallery/admin_listing_99x99/'.$image_name);

    }
}
