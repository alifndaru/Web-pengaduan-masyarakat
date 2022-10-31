<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tanggapan extends Model
{
    use HasFactory;

    protected $filllable = [
        'id_tanggapan', 'user_nik', 'id_pengaduan', 'tanggapan'
    ];
    protected $guarded = ['id_tanggapan'];
    protected $hidden = [
    
    ];

    public function pengaduan()
    {
        return $this->hasOne(Pengaduan::class, 'id_pengaduan', 'id_tanggaapan');
    }
    public function proses()
    {
        return $this->hasMany(Pengaduan::class, 'id_pengaduan','status');
    }
}
