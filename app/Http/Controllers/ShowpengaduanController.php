<?php

namespace App\Http\Controllers;

use App\Models\Pengaduan;
use Illuminate\Http\Request;

class ShowpengaduanController extends Controller
{
    public function index() 
    {
        $dataPengaduan = Pengaduan::all();
        return view('Petugas.tampilan', compact('dataPengaduan'));
    }
}
