<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// Memanggil model siswa 
use App\Siswa;
use Illuminate\Support\Facades\DB;

class SiswaController extends Controller
{
    public function index()
    {
        // Memanggil semua data yang ada di tabel siswa
        $dataSiswa = Siswa::all();

        return view('siswa.index',compact('dataSiswa'));

       //menampilkan for created siswa
    }
    public function createdSiswa()
    {
        $kelas = DB::table('kelas')->get();
    
        return view('siswa.created',['kelas'=>$kelas]);
    }

    public function storeSiswa(Request $req)
    {
        //code
        $newdata = new Siswa();
        $newdata->id = $req->id;
        $newdata->id_kelas = $req->id_kelas;
        $newdata->nis = $req->nis;
        $newdata->nama = $req->nama;
        $newdata->alamat = $req->alamat;
        $newdata->noHp = $req->no_hp;
        $newdata->save();

        return redirect(route('datasiswa'));

    }

    public function homeSiswa()
    {
        return view('siswa.home');
    }



}
