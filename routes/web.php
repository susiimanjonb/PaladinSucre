<?php

use Illuminate\Support\Facades\Route;
use App\Models\Product;

// SPA catch-all: todas las rutas del frontend las maneja Vue Router
Route::get('/{any?}', function ($any = null) {
    $meta_title = 'Paladín Sucre — Embutidos Artesanales';
    $meta_description = 'Embutidos artesanales de calidad en Sucre, Bolivia. Chorizos, salchichas, jamones y más con tradición desde 2009.';
    $meta_image = asset('favicon.ico');
    $meta_url = url()->current();

    // Interceptar la ruta del producto para SEO dinámico
    if (str_starts_with($any, 'catalogo/') && !str_starts_with($any, 'catalogo/api')) {
        $slug = str_replace('catalogo/', '', $any);
        // Quitar posibles subrutas adicionales
        $slug = explode('/', $slug)[0];
        $product = Product::where('slug', $slug)->first();

        if ($product) {
            $meta_title = $product->name . ' | Paladín Sucre';
            $meta_description = \Illuminate\Support\Str::limit(strip_tags($product->description), 150);
            $meta_image = $product->image_url ?? $meta_image;
        }
    }

    return view('app', compact('meta_title', 'meta_description', 'meta_image', 'meta_url'));
})->where('any', '.*');