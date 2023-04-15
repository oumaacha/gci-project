<?php

namespace App\Models;

use Database\Factories\ProduitFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected static function newFactory()
    {
        return ProduitFactory::new();
    }
}
