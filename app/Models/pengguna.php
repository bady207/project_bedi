<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pengguna extends Model
{
    use HasFactory;

    protected $fillable = ['id','nama_pengguna',];
    public $timmestamps = true;


    public function telepon(){
        return $this->hasOne(telepon::class);
    }





}
