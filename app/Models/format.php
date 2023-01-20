<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class format extends Model
{
    use HasFactory;
    public $fillable = [
        'id_surat',
        'id_divisi',
        'perusahaan',
        'bulan',
        'tahun'
    ];
        
    public $timestamps = true;

    public function surat()
    {
      return $this->belongsTo(Surat::class, 'id_surat');
    }
    public function divisi()
    {
      return $this->belongsTo(Divisi::class, 'id_divisi');
    }
    public function investasi()
    {
      return $this->hasMany(Investasi::class, 'id_format');
    }
}
