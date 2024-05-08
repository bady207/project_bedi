<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class prodak extends Model
{
    use HasFactory;

    protected $fillable = ['id','nama_prodak','jumlah','merek_id'];

    public $timmestamps = true;

    public function merek(){
        return $this->belongsTo(merek::class,'merek_id');
    }
}
