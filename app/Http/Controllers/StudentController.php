<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function show(){
        $students=DB::table('student')->get();
        return view('student',['students'=>$students]);
    }
}
