<?php

namespace App\Http\Controllers;
use App\Student;
use App\feedback;

use Illuminate\Http\Request;

class feedbackController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function stor(Request $request){
       
        $advi = Student::where('user_id', auth()->user()->id)->first();
        
        $feedback = new Feedback();
        $feedback->content = $request->feedback;
        $feedback->type = 'Advise about course';
        $feedback->ticket_id = 3;
        $feedback->students_id = $advi->id;
        $feedback->advi_id = $advi->Advisor_id;
        $feedback->save();

        $show = feedback::all();
        return $show ;
        redirect('/ticket');
        
    }
}
