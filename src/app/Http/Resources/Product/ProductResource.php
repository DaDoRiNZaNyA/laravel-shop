<?php

namespace App\Http\Resources\Product;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'description' => $this->description,
            'img' => $this->imgUrl,
            'price' => $this->price,
            'count' => $this->count,
            'category_id' => $this->category_id,
            'tags' => $this->tags,
            'colors' => $this->colors
        ];
    }
}
