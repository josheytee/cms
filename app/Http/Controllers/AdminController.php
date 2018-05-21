<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

    }

    public function profile(Request $request)
    {
    }

    public function edit(Request $request)
    {
        return view('admin.edit');
    }

    public function processEdit(Request $request)
    {
        return $request->all();
    }


}
