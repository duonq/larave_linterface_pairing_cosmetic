<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductCreateRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|unique:products',
            'price' => 'required|numeric',
            'category_id' => 'required|numeric',
            'sale_price' => 'lt:price',
            'upload' => 'mimes:jpg,png,jpeg,gif'
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Tên sản phẩm không được để trống!',
            'name.required' => 'Tên sản phẩm đã được sử dụng!',
            'price.required' => 'Giá sản phẩm không được để trống!',
            'price.numeric' => 'Giá sản phẩm là kiểu numeric!',
            'sale_price.required' => 'Giá KM sản phẩm không được để trống!',
            'sale_price.numeric' => 'Giá KM sản phẩm là kiểu numeric!',
            'sale_price.lt' => 'Giá KM phải nhỏ hơn giá gốc!',
            'upload.mimes' => 'Ảnh phải có định dạng ví dụ: jpg, png, jpeg, gif!'
        ];
    }
}
