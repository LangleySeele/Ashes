<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class history extends Controller
{
    

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('historia');
    }
}
