<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

class RWController extends Controller
{
    public function index()
    {
        $level_id = Auth::user()->level_id;
        return view('RW', ['level_id' => $level_id]);
    }
}
