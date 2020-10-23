<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductAddRequest extends FormRequest
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
            'name' => 'required|min:5|max:255',
            'images' => 'required|image',
            'price' => 'required|numeric',
            'sale_percent' => 'numeric',
        ];
    }

    // Validate massages vietnamese
    public function messages()
    {
        return [
            'name.required' => 'Không được để trống tên sản phẩm, vui lòng nhập tên sản phẩm rồi tiếp tục',
            'name.min' => 'Vui lòng nhập lại, số ký tự tối thiểu là 5 ký tự',
            'name.max' => 'Vui lòng nhập lại, số ký tự tối đa là 255 ký tự',
            'images.required' => 'Không được để trống ảnh sản phẩm, vui lòng nhập ảnh sản phẩm rồi tiếp tục',
            'images.image' => 'Ảnh không đúng định dạng (.jpeg, .png, .bmp, .gif, .svg, hoặc webp), vui lòng thử lại và tiếp tục',
            'price.requied' => 'Không được để trống giá sản phẩm, vui lòng nhập giá sản phẩm rồi tiếp tục',
            'price.numeric' => 'Vui lòng nhập lại, số tiền phải là số',
            'sale_percent.numeric' => 'Vui lòng nhập lại, số % phải là số và bắt đầu từ 0 đến 100',
        ];
    }
}
