<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    use HasFactory;

    protected $table = 'guru';

    protected $fillable = [
        'pemilik',
        'sekolah',
        'nama',
        'jenisKelamin',
        'nip',
        'statusPNS',
        'sertifikasi',
        'bidangStudi',
    ];
}