<?php

namespace App\Http\Requests;

use App\Models\Product;
use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'slug' => 'required|string|max:255',
            'sku' => 'required|string|max:255',
            'category_id' => 'required|integer|exists:categories,id',
            'product_attribute_id' => 'required|integer|exists:product_attributes,id',
            'status' => 'required|string|in:'. implode(",", array_keys(Product::STATUS)),
            'price' => 'required|integer',
            'sale_price' => 'required|integer',
            'short_description' => 'required|string',
            'description' => 'required|string',
        ];
    }
}
