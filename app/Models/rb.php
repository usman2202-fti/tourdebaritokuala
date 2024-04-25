<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rb extends Model
{
    use HasFactory;
    protected $fillable = ['no_ktp','uci_id','nama','tanggal_lahir','alamat','telpon','kategori','no_peserta','klub','foto_ktp','asuransi'];
}
