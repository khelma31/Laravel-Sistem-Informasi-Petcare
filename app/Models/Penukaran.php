<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penukaran extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function poins()
    {
        return $this->belongsTo(Poin::class,'id_poin', 'id');
    }
}
