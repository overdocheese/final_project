<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'product';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nama', 'jenis', 'price', 'stok', 'penjual_id'
    ];

    public function product_galleries(){
        return $this->hasMany(Product_Galleries::class);
    }
    public function penjual(){
        return $this->belongsTO(Penjual::class);
    }
}
