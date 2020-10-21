<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryAddRequest extends FormRequest
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
            'name' => 'required|min:2|max:255',
            'parent_id' => 'required',
        ];
    }

    // Validate massages vietnamese
    public function messages()
    {
        return [
            'name.required' => 'Không được để trống tên đệm, vui lòng nhập tên đệm rồi tiếp tục',
            'name.min' => 'Vui lòng nhập lại, số ký tự tối thiểu là 2 ký tự',
            'name.max' => 'Vui lòng nhập lại, số ký tự tối đa là 255 ký tự',
            'last_name.required' => 'Không được để trống tên, vui lòng nhập tên rồi tiếp tục',
        ];
    }
}
