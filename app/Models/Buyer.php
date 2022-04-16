<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buyer extends Model
{
    protected $fillable = ['nama','tgl_lahir','email','no_hp','qty'];

    protected $table = 'buyer';
    protected $primaryKey = 'id';
    public $incrementing = true;
    protected $timestamp = true;

    //one to many Orderan buyer
    public function orderTiket(){
        return $this->hasMany(Transaksi::class, 'id_transaksi');
    }
}
