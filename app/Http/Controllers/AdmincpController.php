<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdmincpController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('admincp.index');
    }

    public function tinymce(Request $request)
    {
        $originName = $request->file('file')->getClientOriginalName();
        $slugName = str_replace(' ', '_', $originName);
        $fileName = time() . '_' . $slugName;
        $request->file('file')->move(public_path() . '/storage/uploads/', $fileName);
        return response()->json(['location' => "/storage/uploads/$fileName"]);
    }
}
