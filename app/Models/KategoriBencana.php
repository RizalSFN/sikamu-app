<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriBencana extends Model
{
    use HasFactory;
    protected $table = 'kategori_bencana';

    public function lapor_bencana()
    {
        return $this->belongsTo(LaporBencana::class);
    }
}
