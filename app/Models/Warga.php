<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Warga extends Model
{
    use HasFactory;
    protected $table = 'wargas';

    public function user()
    {
        return $this->hasOne(User::class);
    }

    public function rondaData()
    {
        return $this->hasMany(RondaData::class);
    }

    public function lapor_bencana()
    {
        return $this->belongsTo(LaporBencana::class);
    }

    protected $fillable = [
        'nik',
        'nama',
        'foto',
        'ttl',
        'alamat',
        'rt',
        'rw',
        'desa',
        'kecamatan',
        'agama',
        'telepon',
        'koordinat'
    ];
}
