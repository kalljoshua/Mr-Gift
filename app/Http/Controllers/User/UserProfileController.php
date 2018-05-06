<?php

namespace App\Http\Controllers\User;

use App\Order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\URL;
use Intervention\Image\Facades\Image;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Product;
use App\User;
use Input, Redirect;

class UserProfileController extends Controller
{
    //
    use AuthenticatesUsers;

    function userProducts()
    {
        $user_id = Auth::guard('user')->id();
        $products = Product::where('user_id',$user_id)->paginate(12);
        $most_viewed = Product::where('user_id',$user_id)->orderBy('views','DESC')->get();
        return view('user.user_products')
            ->with('most_viewed',$most_viewed)
            ->with('products',$products);
    }

    function pendingProducts()
    {
        $user_id = Auth::guard('user')->id();
        $products = Product::where('user_id',$user_id)->where('active',0)->paginate(12);
        return view('user.pending_products')
            ->with('products',$products);
    }

    function userOrders()
    {
        $user_id =  Auth::guard('user')->id();
        $sales = Order::where('user_id',1)->get();
        return view('user.user_sales')
            ->with('sales',$sales);
    }

    public function php7_unserialize($str, $options = array())
    {
        if(version_compare(PHP_VERSION, '7.0.0', '>='))
        { return unserialize($str, $options); }

        $allowed_classes = isset($options['allowed_classes']) ?
            $options['allowed_classes'] : true;
        if(is_array($allowed_classes) || !$allowed_classes)
        {
            $str = preg_replace_callback(
                '/(?=^|:)(O|C):\d+:"([^"]*)":(\d+):{/',
                function($matches) use ($allowed_classes)
                {
                    if(is_array($allowed_classes) &&
                        in_array($matches[2], $allowed_classes))
                    { return $matches[0]; }
                    else
                    {
                        return $matches[1].':22:"__PHP_Incomplete_Class":'.
                            ($matches[3] + 1).
                            ':{s:27:"__PHP_Incomplete_Class_Name";'.
                            serialize($matches[2]);
                    }
                },
                $str
            );
        }
        unset($allowed_classes);
        return unserialize($str);
    }


    function userUpdatePassword (Request $request){
        $id = Auth::guard('user')->id();
        $hashedPassword = Auth::guard('user')->user()->password;
        $agent = User::find($id);

        if (\Hash::check(Input::get('oldpass'), $hashedPassword)) {
            // The passwords match...
            if(Input::get('newpass') == Input::get('confirmpass')){

                if(Input::has('newpass')) $agent->password = bcrypt(Input::get('newpass'));
                if($agent->save()){
                    flash('Password update was successfully done.')->success();
                    return Redirect::to(URL::previous());
                }
            }else{
                flash('Unsuccessfull Update, Password miss-match')->error();
                return Redirect::to(URL::previous());
            }
        }else{
            flash('Unsuccessfull Update. Provide correct old password')->error();
            return Redirect::to(URL::previous());
        }

    }

    public function userEditSubmit(Request $request){


        $id = Auth::guard('user')->id();
        $user = User::find($id);

        if(Input::has('name')) $user->name = Input::get('name');
        if(Input::has('phone')) $user->phone = Input::get('phone');
        if(Input::has('email')) $user->email = Input::get('email');

        if( $request->hasFile('edit_photo') ) {

            $imageName = $request->input('name').'.'.$request->edit_photo->extension();

            $imageName = str_replace(' ', '_', $imageName);
            if($path = $request->edit_photo->move(public_path().'/cache_uploads/', $imageName)){
                $user->image = $imageName;

                if($user->save()){
                    $path = public_path().'/cache_uploads/'.$imageName;

                    $this->resizeProfileImage($path,$imageName);

                    flash('Update was successfully done.')->success();
                    return Redirect::to(URL::previous());
                }
                else{
                    flash('Un successfull Update')->error();
                    return Redirect::to(URL::previous());
                }

            }else{
                if($user->save()){
                    flash('Update was successfully done.')->success();
                    return Redirect::to(URL::previous());
                }
                else{
                    flash('Un successfull Update')->error();
                    return Redirect::to(URL::previous());
                }

            }
        }else{
            if($user->save()){
                flash('Update was successfully done.')->success();
                return Redirect::to(URL::previous());
            }

        }


    }



    function resizeProfileImage($path,$image_name)
    {

        ini_set('memory_limit','256M');
        ini_set('max_execution_time', 600);

        $image_path = $path;

        Image::make($image_path)
            ->resize(239, 239)
            ->save(public_path().'/images/users/all_user_239x239/'.$image_name);

        Image::make($image_path)
            ->resize(74, 74)
            ->save(public_path().'/images/users/contact_user_74x74/'.$image_name);

        Image::make($image_path)
            ->resize(71, 71)
            ->save(public_path().'/images/users/home_71x71/'.$image_name);

        Image::make($image_path)
            ->resize(330, 330)
            ->save(public_path().'/images/users/profile_330x330/'.$image_name);
    }
}
