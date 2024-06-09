<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Http\Requests\Product\UpdateRequest;
use App\Models\ColorProduct;
use App\Models\Product;
use App\Models\ProductTag;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Product $product)
    {
        $data = $request->validated();

        $product->update([
            'title' => $data['title'],
            'description' => $data['description'],
            'img' => Storage::disk('public')->put('/images', $data['img']),
            'price' => $data['price'],
            'count' => $data['count'],
            'category_id' => $data['category_id'],
        ]);

        if (isset($data['tags'])) {
            $product->tags()->sync($data['tags']);
        }

        if (isset($data['colors'])) {
            $product->colors()->sync($data['colors']);
        }

        return view('product.show', compact('product'));
    }
}
