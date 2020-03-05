<?php

namespace App\Http\Controllers;
use App\Role;
use Illuminate\Http\Request;
use App\Advisor;
use App\Student;
use App\User;

class HomeController extends Controller
{
    /*public function __construct()
    {
        $this->middleware('auth');
    }*/
  
    public function index()
    {
     //   $stu = Student::where('user_id', auth()->user()->id)->first();
      //  $sub = ::where('students_id', $stu->id)->get();

        return view('student/home');
    }
   

   
}
