<?php

namespace App\Models;

use App\Models\Pengguna;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Saran extends Model
{
    use HasFactory;
    protected $guarded = [];
    
    public function penggunas()
    {
        return $this->belongsTo(Pengguna::class,'id_pengguna', 'id');
    }
}
