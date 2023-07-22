<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    use HasFactory;
    protected $table = 'tb_pasien';
    protected $primaryKey = 'pas_id';
    protected $guarded = '[]';
    protected $fillable = [
        'pasien_id',
        'pasien_id_gol',
        'pasien_id_user',
        'pasien_no',
        'pasien_nama',
        'pasien_alamat',
        'pasien_hp'
    ];
    public function golongan()
    {
        return $this->belongsTo(Golongan::class);    
    }
}
