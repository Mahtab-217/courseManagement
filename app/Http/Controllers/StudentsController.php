<?php

namespace App\Http\Controllers;

use App\Models\Students;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    //
    public function index(){
        $students=Students::with('subject','classes')->get();
        return $students;
    }
}
