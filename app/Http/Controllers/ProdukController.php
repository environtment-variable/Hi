<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Inertia\Inertia;

class ProdukController extends Controller
{
    public function index()
    {
        // Mengambil produk beserta data supplier-nya
        $produks = Produk::with('supplier')->get();

        return Inertia::render('Produk/Index', [
            'produks' => $produks
        ]);
    }
}