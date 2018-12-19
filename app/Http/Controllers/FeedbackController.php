<?php

namespace App\Http\Controllers;

use App\Feedback;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FeedbackController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        return view('dashboard.feedback');
    }

    public function store(Request $request){
        Feedback::create([
           'user_id' => Auth::user()->id,
            'subject' => $request->subject,
            'body' => $request->body,
        ]);

        return back();
    }

    public function create(){

    }
}
