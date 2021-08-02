<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'quantity',
        'price',
    ];

    /**
     * Get the invoice that owns the product.
     */
    public function invoice()
    {
        return $this->belongsTo(Invoice::class);
    }
}
