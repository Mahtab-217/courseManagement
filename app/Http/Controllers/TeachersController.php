<?php

namespace App\Http\Controllers;

use App\Models\Teachers;
use Illuminate\Http\Request;

class TeachersController extends Controller
{
    //
    public function index(){
        $teachers=Teachers::with('classes')->get();
        return $teachers;
    }
}
