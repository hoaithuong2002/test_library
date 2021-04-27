<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'=>"required|unique:books,name",
            'status'=>"required",
            'description'=>"required"
        ];
    }

    public function messages(): array
    {
        return[
            'name.required'=>"truong nay khong duoc de trong",
            'name.unique'=>"truong nay da ton tai",
            'status.required'=>"Truong nay khong duoc de trong",
            'description.required'=>"truong naykhong duoc de trong",
        ];
    }
}
