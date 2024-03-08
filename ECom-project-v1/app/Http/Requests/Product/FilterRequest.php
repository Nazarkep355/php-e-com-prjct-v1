<?php

namespace App\Http\Requests\Product;

use Illuminate\Foundation\Http\FormRequest;

class FilterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'page'=>'integer',
            'detail'=>'string',
            'title'=>'string',
            'category'=>'string',
            'category_id'=>'integer',
            'min_price'=>'numeric',
            'max_price'=>'numeric',
            'highest'=>'boolean',
            'lowest'=>'boolean'
        ];
    }
}
