<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Occassion;
use Input, Redirect;

class OccasionsController extends Controller
{
    public function showAll()
    {
        $types = Occassion::all();
        return view('admin.admin_occasions')
            ->with('types',$types);
    }

    public function typeForm()
    {
        return view('admin.new_occasion');
    }

    public function submitType()
    {
        $type = new Occassion();
        if(Input::has('name')) $type->name = Input::get('name');
        if($type->save())
        {
            flash('Occassion has successfully been added.')->success();
            return redirect(route('admin.all.occasions'));
        }

        //return "submition awaiting";
    }

    public function edit(Request $request,$id)
    {
        $type = Occassion::find($id);
        return view('admin.edit_occasion')
            ->with('type',$type);
    }

    public function editSubmit(Request $request)
    {
        if(Input::has('id')) $id = Input::get('id');
        $type = Occassion::find($id);
        if(Input::has('name')) $type->name = Input::get('name');
        if($type->save())
        {
            flash('Occassion has successfully been Edited.')->success();
            return redirect(route('admin.all.occasions'));
        }else{
            flash('Failed to edit Occassion')->error();
            return redirect(route('admin.all.occasions'));
        }
    }

    function delete(Request $request,$id){
        $type = Occassion::find($id);
        return view('admin.admin_occasion_delete')
            ->with('type',$type);
    }

    function destroy(Request $request){
        $id = $request->input('id');

        if(Occassion::destroy($id)){
            flash('Occassion deleted successfully')->success();
            return redirect()->route('admin.all.occasions');
        }else{
            flash('Failed to delete Occasion')->error();
            return redirect()->route('admin.all.occasions');
        }
    }
}
