<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;

    protected $fillable = [
        'type',
        'total',
    ];

    /**
     * Get the user that owns the invoice.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the seller that owns the invoice.
     */
    public function seller()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the products for invoice.
     */
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
