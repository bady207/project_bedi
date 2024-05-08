<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class detail_penjualan extends Model
{
    use HasFactory;

    protected $fillable = ['penjualan_id','barang_id','jumlah','total_harga'];

    public $timmestamps = true;

    public function penjualan(){
        return $this->belongsTo(penjualan::class,'penjualan_id');
    }

    public function barang(){
        return $this->belongsTo(barang::class,'barang_id');
    }
}
