<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    use HasFactory;
    protected $table = "Karyawan";
    protected $fillable = ['no','nama','tanggal','materi','lokasi'];
}
