<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function totalInvoice()
    {
        return Invoice::select(DB::raw('sum(products.price * products.quantity) AS total'))
            ->where('invoices.id', 1)
            ->join('products', 'products.invoice_id', '=', 'invoices.id')
            ->first();
    }

    public function invoiceProductsGreaterHundred()
    {
        return Invoice::with('products')
            ->whereHas('products', function (Builder $query) {
                $query->where('quantity', '>', 100);
            })
            ->orderBy('id')
            ->pluck('id');
    }

    public function productsTotalGreaterOneMillion()
    {
        Product::select('name')
            ->groupBy('name')
            ->havingRaw('SUM(price * quantity) > ?', [1000000])
            ->get();
    }
}
