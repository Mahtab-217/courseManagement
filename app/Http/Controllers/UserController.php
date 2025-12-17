<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class UserController extends Controller
{
    //
    public function index(){
       $allusers=User::with('teacher','student')->get();
        return $allusers;
    }
}
