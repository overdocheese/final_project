<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penjual extends Model
{
    use HasFactory;
    protected $table = 'penjual';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nama', 'nama_toko', 'deskripsi_toko'
    ];

    public function product(){
        return $this->hasMany(Product::class);
    }
}
