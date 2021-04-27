<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
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
            'name'=> "required|unique:users,name",
            'email' => "required|email|unique:users,email",
            'password'=> "required|min:6",
        ];
    }

    public function messages(): array
    {
        return [
            'name.required'=>'Truong nay khong duoc de trong',
            'name.unique'=>'Ten nay da ton tai',
//            'phone.required'=>'Truong nay khong duoc de trong',
//            'phone.max'=>'Nhieu nhat 10 ki tu ',
//            'phone.unique'=>'Phone nay da ton tai',
            'email.required'=>'Truong nay khong duoc de trong',
            'email.unique'=>'Email nay da ton tai',
            'email.email'=>'Khong dung dinh danng',
            'password.required'=>'Truong nay khong duoc de trong',
            'password.min'=>'It nhat 6 ky tu tro len',
//            'address.required'=>'Truong nay khong duoc de trong',
//            'address.unique'=>'Ten nay da ton tai',
//            'avatar.required'=>'Truong nay khong duoc de trong',
//            'role.required'=>'Truong nay khong duoc de trong',

        ];
    }
}
