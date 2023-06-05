<?php

namespace App\Models;

use App\Models\Pengguna;
use App\Models\Hewan;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function pengguna()
    {
        return $this->belongsTo(Pengguna::class, 'id_pengguna', 'id');
    }

    public function hewan()
    {
        return $this->belongsTo(Hewan::class, 'id_hewan', 'id');
    }
}
