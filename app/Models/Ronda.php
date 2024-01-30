<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ronda extends Model
{
    use HasFactory;
    protected $table = 'ronda_absens';

    public function user() {
        return $this->belongsTo(User::class);
    }
}
