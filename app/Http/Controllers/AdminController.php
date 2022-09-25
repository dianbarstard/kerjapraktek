<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Karyawan;
use App\Models\Mahasiswa;

class AdminController extends Controller
{
    public function dashboard() {
        $karyawan = Karyawan::All()->count();
        $mahasiswa = Mahasiswa::All()->count();
        return view('admin.dashboard', compact ('karyawan','mahasiswa'));
    }
}
