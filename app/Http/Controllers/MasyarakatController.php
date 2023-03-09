<?php namespace App\Http\Controllers;

use App\Models\Pengaduan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MasyarakatController extends Controller 
{
    // public function index()
    // {
    //     return view('tampilan');
    // }
   
    // public function formpengaduan(){
    //     $dataPengaduan = Pengaduan::all();
    //     return view('Pengaduan.tampilan', compact('dataPengaduan'));
    // }

    // public function simpan(Request $request)
    // {
    //     $dataPengaduan = Pengaduan::create($request->all());

    //     if($request->hasFile('foto')){
    //         $request->file('foto')->move('foto/.', $request->file('foto')->getClientOriginalName());
    //         $dataPengaduan->foto = $request->file('foto')->getClientOriginalName();
    //         $dataPengaduan->save();
    //     }            


    //     return Redirect('/pengaduan')->with('success', 'Data Berhasil Ditambahkan');
    // }

}