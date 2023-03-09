<?php

namespace App\Http\Controllers;


use App\Models\Petugas;
use Illuminate\Http\Request;


class PetugasController extends Controller
{
    public function index() 
    {
        $dataPetugas = Petugas::all();
        return view('layoutt', compact('dataPetugas'));
    }
}
