<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
     // controller task 2
     public function nilaiMahasiswa(){
        
        //array scalar
        $s1 = ['nama'=>'Fawwaz', 'nilai'=>85];
        $s2 = ['nama'=>'Bedu', 'nilai'=>58];
        $s3 = ['nama'=>'Siti', 'nilai'=>95];
        $s4 = ['nama'=>'Deden', 'nilai'=>30];
        //array assocative
        $siswa = [$s1, $s2, $s3, $s4];
        $data_table = ['NO', 'NAMA', 'NILAI', 'KETERANGAN'];
        
        return view('nilai_mahasiswa', compact('siswa', 'data_table')
            
    );
    }
}
