<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product_Galleries extends Model
{
    use HasFactory;
    protected $table = 'product_galleries';
    protected $primaryKey = 'id';
    protected $fillable = [
        'foto', 'product_id'
    ];

    public function product(){
        return $this->belongsTO(Product::class);
    }
}
