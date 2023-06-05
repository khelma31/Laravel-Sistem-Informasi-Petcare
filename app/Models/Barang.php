<?php

namespace App\Models;

use App\Models\Distributor;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function distributors()
    {
        return $this->belongsTo(Distributor::class,'id_distributor', 'id');
    }
}
