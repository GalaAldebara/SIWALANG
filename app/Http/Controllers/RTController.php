<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;

class RTController extends Controller
{
    public function index()
    {
        return view('RT');
    }

    // public function list(Request $request)
    // {
    //     if ($request->ajax()) {
    //         $data = UserModel::all();
    //         return Datatables::of($data)
    //             ->addIndexColumn()
    //             ->addColumn('aksi', function ($row) {
    //                 $btn = '<a href="' . route('warga.edit', $row->id) . '" class="edit btn btn-primary btn-sm">Edit</a>';
    //                 $btn .= '<a href="' . route('warga.show', $row->id) . '" class="edit btn btn-primary btn-sm">Show</a>';
    //                 return $btn;
    //             })
    //             ->rawColumns(['aksi'])
    //             ->make(true);
    //     }

    //     return view('rt.DataWarga.index');
    // }
}
