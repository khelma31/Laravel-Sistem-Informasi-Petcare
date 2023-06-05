<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tkonsumen extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function konsumens()
    {
        return $this->belongsTo(Konsumen::class,'id_konsumen', 'id');
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

    public function penukarans()
    {
        return $this->belongsTo(Penukaran::class,'id_penukaran', 'id');
    }
    
}
