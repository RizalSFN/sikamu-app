<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LaporBencana extends Model
{
    use HasFactory;
    protected $table = 'lapor_bencana';
    protected $fillable = ['status'];

    public function kategori_bencana()
    {
        return $this->belongsTo(KategoriBencana::class);
    }

    public function warga()
    {
        return $this->belongsTo(Warga::class);
    }
}
