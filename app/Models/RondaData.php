<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RondaData extends Model
{
    use HasFactory;
    protected $table = 'rondas';
    protected $fillable = ['nama', 'hari'];

    public function warga()
    {
        return $this->belongsTo(Warga::class, 'warga_id', 'id');
    }
}
