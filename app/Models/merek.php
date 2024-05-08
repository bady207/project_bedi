<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class merek extends Model
{
    use HasFactory;

    protected $fillable = ['id','nama_merek',];

    public $timmestamps = true;

    public function prodak(){
        return $this->hasMany(prodak::class);
    }

}
