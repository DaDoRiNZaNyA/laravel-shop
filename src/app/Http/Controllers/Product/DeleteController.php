<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Models\ColorProduct;
use App\Models\Product;
use App\Models\ProductTag;
use Illuminate\Support\Facades\DB;

class DeleteController extends Controller
{
    public function __invoke(Product $product)
    {
        DB::beginTransaction();

        try {
            ColorProduct::where('product_id', $product->id)->delete();
            ProductTag::where('product_id', $product->id)->delete();
            $product->delete();

            DB::commit();
            return redirect()->route('product.index')->with('success', 'Product and associated color products successfully deleted.');
        } catch (\Exception $e) {
            DB::rollBack();

            return back()->with('error', 'Error deleting product: ' . $e->getMessage());
        }
    }
}
