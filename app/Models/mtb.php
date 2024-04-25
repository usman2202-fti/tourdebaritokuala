<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mtb extends Model
{
    use HasFactory;
    protected $fillable = ['no_ktp','nama','tanggal_lahir','alamat','telpon','kategori','klub'];
}
