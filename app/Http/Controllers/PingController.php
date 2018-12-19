<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PingController extends Controller
{
    public function __construct()
    {
        $this->middleware(['role:admin']);
    }

    public function index(){
        return view('dashboard.admin.ping_test');
    }
}
