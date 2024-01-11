<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Akun extends Model
{
    use HasFactory;

    public function warga()
    {
        return $this->hasOne(Warga::class);
    }

    public function ronda() {
        return $this->hasMany(Ronda::class);
    }
}
