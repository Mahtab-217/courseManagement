<?php

namespace App\Http\Controllers;

use App\Models\Classes;
use App\Models\images;
use App\Models\Students;
use App\Models\Teachers;
use App\Models\User;
use Illuminate\Http\Request;
use Nette\Utils\Image;

class TeachersController extends Controller
{
    //
    public function index(){
        $teachers=Teachers::all();
        return view('Teacher.allTeachers')->with('teachers',$teachers);
    }
   public function showAddForm(){
    $users=User::all();
    return view('Teacher.add', compact('users'));
   }
   public function create(Request $request){
    $teacher=new Teachers();
    $request->validate([
        "name"=>"required|min:3|max:20",
        "phoneNumber"=>"required|min:10|max:15",
        "image"=>"nullable|image|mimes:png,jpg,gif,jpeg",
        

    ]);
    $path=null;
    if($request->hasFile("image")){
        $path= $request->file("image")->store("images","public");
    }

    $teacher->name=$request->name;
    $teacher->phoneNumber=$request->phoneNumber;
    $teacher->user_id=$request->user_id;
    $teacher->save();

   $image = new images();
   $image->path=$path;
   $image->imageable_id=$teacher->id;
   $image->imageable_type=Teachers::class;
   $image->save();
   return redirect('/');
   }

}
