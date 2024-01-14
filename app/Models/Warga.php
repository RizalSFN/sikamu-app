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

    protected $fillable = [
        'nik',
        'nama',
        'tempat/tanggal_lahir',
        'jenis_kelamin',
        'alamat',
        'rt',
        'rw',
        'desa',
        'kecamatan',
        'agama',
        'status',
        'pekerjaan',
        'kewarganegaraan',
        'telepon'
    ];
}
