<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormAgamarequest extends FormRequest
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
            'nama_agama' => 'required|min:3',
        ];
    }
    public function messages()
    {
        return [
            'nama_agama.required' => 'Nama Agama Tidak Boleh Kosong',
            'nama_agama.min' => 'Nama Agama Minimal 3 Karakter',
        ];
    }
}
