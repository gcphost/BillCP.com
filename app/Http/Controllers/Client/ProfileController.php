<?php

namespace App\Http\Controllers\Client;

use App\Http\Requests;
use Illuminate\Http\Request;

class ProfileController extends \App\Http\Controllers\Controller
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
    public function index()
    {
        return view('client.dashboard.index');
    }
}
