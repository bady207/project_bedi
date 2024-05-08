<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class penjualan extends Model
{
    use HasFactory;

    protected $fillable = ['id','nama_pelanggan','sub_total','diskon','grand_total'];

    public $timmestamps = true;

}
