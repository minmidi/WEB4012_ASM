<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserEditRequest extends FormRequest
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
            'name' => 'min:5|max:20',
            'images' => 'image',
            'email' => 'email|regex:/^.+@.+$/i',
        ];
    }

    // Validate massages vietnamese
    public function messages()
    {
        return [
            'first_name.min' => 'Vui lòng nhập lại, số ký tự tối thiểu là 2 ký tự',
            'first_name.max' => 'Vui lòng nhập lại, số ký tự tối đa là 255 ký tự',
            'last_name.min' => 'Vui lòng nhập lại, số ký tự tối thiểu là 2 ký tự',
            'last_name.max' => 'Vui lòng nhập lại, số ký tự tối đa là 255 ký tự',
            'name.min' => 'Vui lòng nhập lại, số ký tự tối thiểu là 5 ký tự',
            'name.max' => 'Vui lòng nhập lại, số ký tự tối đa là 20 ký tự',
            'images.image' => 'Ảnh không đúng định dạng (.jpeg, .png, .bmp, .gif, .svg, hoặc webp), vui lòng thử lại và tiếp tục',
            'email.email' => 'Thông tin nhập vào không đúng định dạng (VD: abc@gmail.com)',
            'email.regex' => 'Email không đúng định dạng, vui lòng nhập lại và tiếp tục (VD: adc@gmail.com)',
        ];
    }
}
