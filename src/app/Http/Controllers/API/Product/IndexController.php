<?php

namespace App\Http\Controllers\API\Product;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Resources\Product\ProductResource;

class IndexController extends Controller
{
    public function __invoke(Request $request)
    {
        $perPage = $request->input('size', 10);

        $page = $request->input('page', 1);

        $products = Product::with('tags', 'colors')->paginate($perPage, ['*'], 'page', $page);

        return ProductResource::collection($products);
    }
}
