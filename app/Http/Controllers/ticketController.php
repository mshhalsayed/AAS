<?php

namespace App\Http\Controllers;

use App\Student;
use App\Ticket;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;

class ticketController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $stu = Student::where('user_id', auth()->user()->id)->first();
        $ticket = Ticket::where('students_id', $stu->id)->get();

        return view('student/ticket')->with('ticket', $ticket);
    }

    public function stor(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'select' => 'requird',
            'content' => 'requird'
        ]);

        if($validator->failed()){
            return back().with('errors', $validator->massages->all()[8])->withInput();
        }

        $advi = Student::where('user_id', auth()->user()->id)->first();
        $ticket = new Ticket();
        $ticket->content = $request->content;
        $ticket->type = $request->select;
        $ticket->students_id = $advi->id;
        $ticket->advi_id = $advi->Advisor_id;
        $ticket->save();

        $show = Ticket::all();
        return redirect('/ticket');
    }
}
