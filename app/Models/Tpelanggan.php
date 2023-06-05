<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tpelanggan extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function pelanggans()
    {
        return $this->belongsTo(Pelanggan::class,'id_pelanggan', 'id');
    }

    public function pegawais()
    {
        return $this->belongsTo(Pegawai::class,'id_pegawai', 'id');
    }

    public function layanans()
    {
        return $this->belongsTo(Layanan::class,'id_layanan', 'id');
    }

    public function barangs()
    {
        return $this->belongsTo(Barang::class,'id_barang', 'id');
    }
}
