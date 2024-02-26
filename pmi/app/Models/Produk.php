<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;
    protected $table = 'produk';
    protected $keyType = 'string';
    public $incrementing = false;
    public $timestamps = false;
    protected $primaryKey = 'idproduk';
    protected $guarded = [];
}
