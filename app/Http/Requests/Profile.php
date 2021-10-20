<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class Profile extends FormRequest
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
        switch ($this->method()) {
            case 'POST':
            {
                return [
                    'name' => 'required',
                    'nip' => 'required|alpha_num|unique:users',
                    // 'nomor' => 'required|numeric|unique:users',
                    'password' => 'required|confirmed|min:6',
                ];
            }
            case 'PUT':
            // case 'PATCH':
            {
                return [
                    //below way will only work in Laravel ^5.5
                    'nip' => Rule::unique('users')->ignore($this->id),
                    // 'nomor' => Rule::unique('users')->ignore($this->id),
                    // 'password' => 'confirmed|min:6',
                ];
            }
            default: break;
        }
    }
}
