<?php

namespace App\Http\Controllers;

use illuminate\Http\Request;
use illuminate\Support\Facades\DB;

class KategoriController extends Controller
{
    public function index()
    {
        /* data = [
            'Kategori_kode' => 'SNK',
            'Kategori_nama' => 'Snack/Makanan Ringan',
            'created_at' => now()
        ];
        DB::table('m_Kategori')->insert($data);
        return 'Insert data baru berhasil'; */

        // $row = DB::table('m_kategori')->where('Kategori_Kode','SNK')->update(['Kategori_nama' => 'Camilan']);
        //return 'Update data berhasil. jumlah data yang di  update: ' . $row.'baris';

        //$row = DB::table('m_kategori')->where('kategori_kode','SNK')->delete();
       //return 'Delete data berhasil.Jumlah data yang dihapus: '.$row.'baris';
       


        $data = DB::table('m_kategori')->get();
        return view('Kategori', ['data' => $data]);

    }
}