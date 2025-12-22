<?php

namespace App\Http\Controllers;

use App\Models\Classes;
use App\Models\Students;
use App\Models\Teachers;
use App\Models\User;
use Illuminate\Http\Request;

class TeachersController extends Controller
{
    //
    public function index(){
        $teachers=Teachers::with('classes','students')->where('id',">",'5')->get();
        return $teachers;
    }
   public function showAddForm(){
    $users=User::all();
    return view('Teacher.add', compact('users'));
   }
}
