<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function show(){
        $students=DB::table('student')->paginate(3);
        // $students->withPath('/gh/students');
        // $students=DB::table('student')->simplePaginate(3);
        return view('student',['students'=>$students]);
    }
}
