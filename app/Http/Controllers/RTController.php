<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Auth;
use Illuminate\Http\Request;

class RTController extends Controller
{
    public function index()
    {
        $level_id = Auth::user()->level_id;
        return view('RT', ['level_id' => $level_id]);
    }
}
