<?php

namespace App\Http\Controllers;
use App\Models\Petugas;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index() 
    {
        $dataAdmin = Petugas::all();
        return view('layouttt', compact('dataAdmin'));
    }
}
