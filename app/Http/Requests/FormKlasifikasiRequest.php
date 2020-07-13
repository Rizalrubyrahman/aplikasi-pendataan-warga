<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormKlasifikasiRequest extends FormRequest
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
            'klasifikasi' => 'required|min:3'
        ];
    }
    public function messages()
    {
        return [
            'klasifikasi.required' => 'Nama Klasifikasi Tidak Boleh Kosong',
            'klasifikasi.min' => 'Nama Klasifikasi Minimal 3 Karakter',
        ];
    }
}
