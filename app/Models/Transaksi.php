<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $fillable = ['id_buyer', 'tgl_pembelian','total_tiket','total_pembayaran'];

    protected $table = 'transaksi';
    protected $primaryKey = 'id';
    public $incrementing = true;
    protected $timestamp = true;

    //one to many inverse relationship
    public function order(){
        return $this->belongsTo(Buyer::class, 'id_buyer');
    }
}
