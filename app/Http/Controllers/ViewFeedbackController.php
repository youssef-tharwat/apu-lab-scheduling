<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Feedback;

class ViewFeedbackController extends Controller
{

    public function __construct()
    {
        $this->middleware(['role:admin']);
    }

    public function index(){

        $feedbacks = Feedback::all();

        return view('dashboard.admin.view_feedback')->with('feedbacks', $feedbacks);
    }

}
