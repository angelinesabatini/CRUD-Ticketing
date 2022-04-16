<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailTransaksi extends Model
{
    protected $fillable = ['id_trans','id_tiket','jumlah_pembelian','harga_satuan', 'total_harga'];

    protected $table = 'detail_transaksi';
    protected $primaryKey = 'id';
    public $incrementing = true;
    protected $timestamp = true;

    //many to many inverse relationship
    public function detailOrder(){
        return $this->belongsToMany(Transaksi::class, 'id_trans');
    }

    public function tickets(){
        return $this->belongsTo(Ticket::class, 'id_ticket');
    }
}

