<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Image;
use App\project;

class ProjectController extends Controller
{
    public function addProject(Request $request)
    {
        $addProject = new Project;
        $addProject->p_name =  $request['p_name']; 
        $addProject->p_desc =  $request['p_desc']; 
        $addProject->p_link =  $request['p_link']; 

        if($request->hasfile('image')){
            echo $img_tmp = Input::file('image');
            if($img_tmp->isValid()){

            //image path code
            $extension = $img_tmp->getClientOriginalExtension();
            $filename = rand(111,9999).'.'.$extension;
            $img_path = 'uploads/'.$filename;

            //image resize
            Image::make($img_tmp)->resize(500,500)->save($img_path);

            $addProject->image = $filename;
        }
        }
        $addProject->image = $request['image']; 
        $addProject->save();
    }

    public function viewProject()
    {
        $records = Project::all();
    	return response()->json($records);
    }
}
