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
            'first_name' => 'required|min:2',
            'last_name' => 'required|min:2',
            'birthday' => 'required',
            'address' => 'required',
            'name' => 'required|min:5|max:20',
            'images' => 'image',
            'email' => 'required|email|regex:/^.+@.+$/i',
            'password' => 'required|regex:/^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,}$/',
        ];
    }

    // Validate massages vietnamese
    public function messages()
    {
        return [
            'first_name.required' => 'Không được để trống tên đệm, vui lòng nhập tên đệm rồi tiếp tục',
            'first_name.min' => 'Vui lòng nhập lại, số ký tự tối thiểu là 2 ký tự',
            'first_name.max' => 'Vui lòng nhập lại, số ký tự tối đa là 255 ký tự',
            'last_name.required' => 'Không được để trống tên, vui lòng nhập tên rồi tiếp tục',
            'last_name.min' => 'Vui lòng nhập lại, số ký tự tối thiểu là 2 ký tự',
            'last_name.max' => 'Vui lòng nhập lại, số ký tự tối đa là 255 ký tự',
            'birthday.required' => 'Không được để trống ngày, vui lòng nhập ngày rồi tiếp tục',
            'address.required' => 'Không được để trống địa chỉ, vui lòng nhập ngày rồi tiếp tục',
            'name.required' => 'Không được để trống tên đăng nhập, vui lòng nhập rồi tiếp tục',
            'name.min' => 'Vui lòng nhập lại, số ký tự tối thiểu là 5 ký tự',
            'name.max' => 'Vui lòng nhập lại, số ký tự tối đa là 20 ký tự',
            'images.image' => 'Ảnh không đúng định dạng (.jpeg, .png, .bmp, .gif, .svg, hoặc webp), vui lòng thử lại và tiếp tục',
            'email.required' => 'Không được để trống địa chỉ Email, vui lòng nhập rồi tiếp tục',
            'email.email' => 'Thông tin nhập vào không đúng định dạng (VD: abc@gmail.com)',
            'email.regex' => 'Email không đúng định dạng, vui lòng nhập lại và tiếp tục (VD: adc@gmail.com)',
            'password.required' => 'Không được để trống mật khẩu, vui lòng nhập rồi tiếp tục', 
            'password.regex' => 'Mật khẩu phải có tối thiểu tám ký tự, ít nhất một chữ cái, một số và một ký tự đặc biệt', 
        ];
    }
}
