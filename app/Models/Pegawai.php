<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function tkonsumens()
    {
        return $this->hasMany(Tkonsumen::class);
    }

    public function tpelanggan()
    {
        return $this->hasMany(Tpelanggan::class);
    }
}
