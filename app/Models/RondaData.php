<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RondaData extends Model
{
    use HasFactory;
    protected $table = 'ronda_datas';

    public function ronda_absen(){
        return $this->hasMany(Ronda::class);
    }
}
