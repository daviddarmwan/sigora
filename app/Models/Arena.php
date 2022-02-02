<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Arena extends Model
{
    use HasFactory, Notifiable;
    protected $table = 'arena';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'nama_arena',
        'kode_gor',
    ];
    public function Gor(){
        return $this->belongsTo(Gor::class,'kode_gor', 'id');
    }
}
