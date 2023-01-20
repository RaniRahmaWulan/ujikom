<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Investasi extends Model
{
    use HasFactory;
    public $fillable = [
    'id_format',
    'nomor',
    'tujuan',
    'perihal',
    'keterangan'
    ];

    public function format()
    {
      return $this->belongsTo(format::class, 'id_format');
    }
}
