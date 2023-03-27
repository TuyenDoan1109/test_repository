<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateAdminRequest extends FormRequest
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
        $id = $this->admin;
        return [
            'name' => 'required',
            'password' => 'nullable',
            'password_confirmation' => 'nullable|same:password',
            'email' => [
                'required',
                Rule::unique('App\Models\Admin')->ignore($id, 'id')->where(function ($query) {
                    $query->where('deleted_at', NULL);
                })
            ],
        ];
    }

    public function messages() {
        return [
            'name.required' => 'Chưa nhập tên',
            'password_confirmation.same' => 'confirm password không giống pasword',
            'email.required' => 'Chưa nhập email',
            'email.unique' => 'Email ko dc trùng nhau',
        ];
    }
}
