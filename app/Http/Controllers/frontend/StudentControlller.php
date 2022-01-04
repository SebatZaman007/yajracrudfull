<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentControlller extends Controller
{
    public function blogIndex(){
        $data=Student::latest()->get();
        return view('frontend.master',compact('data'));
    }
}
