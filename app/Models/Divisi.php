<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Divisi extends Model
{
    use HasFactory;
    public $fillable = ['divisi'];
        
    
    public function format()
    {
        return $this->hasMany(format::class, 'id_divisi');
    }
    public $timestamps = true;
}
