<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profile($nama = "Auvar", $kelas = "B", $npm = "2117051027")
    {
        $data = [
            'nama'  => $nama,
            'kelas' => $kelas,
            'npm'   => $npm,
        ];

        return view('profile')->with($data);
    }
}
