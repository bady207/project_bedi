<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class telepon extends Model
{
    use HasFactory;

    protected $fillable = ['id','no_telepon','pengguna_id'];

    public $timmestamps = true;

    public function pengguna(){
        return $this->belongsTo(pengguna::class,'pengguna_id');
    }
}
