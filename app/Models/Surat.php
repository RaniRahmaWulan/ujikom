<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Surat extends Model
{
    use HasFactory;
    public $fillable = [
        'jenis_surat',
        'kode_surat'];
        
        public function format()
        {
            return $this->hasMany(format::class, 'id_surat');
        }
    public $timestamps = true;
}
