<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Absep21 extends Model
{
    use HasFactory;
    protected $table = "Absep21";
    protected $fillable = ['no','nama','tanggal','materi','lokasi'];
}
