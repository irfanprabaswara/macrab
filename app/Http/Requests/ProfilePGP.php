<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ProfilePGP extends FormRequest
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
            case 'POST': {
                    return [
                        'name' => 'required',
                        'nomor' => 'required|alpha_num|unique:users',
                        // 'nip' => 'required|unique:users',
                        'password' => 'required|confirmed|min:6',
                    ];
                }
            case 'PUT':
            case 'PATCH': {
                    return [
                        //below way will only work in Laravel ^5.5
                        'nomor' => Rule::unique('users')->ignore($this->id),
                        // 'nip' => Rule::unique('users')->ignore($this->id),
                    ];
                }
            default: break;
        }
    }
}
