<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormKKRequest extends FormRequest
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
            'no_kk' => 'required',
            'kepala_keluarga' => 'required',
            'rt' => 'required',
            'rw' => 'required',
            'desa' => 'required',
            'kecamatan' => 'required',
            'kabupaten' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'no_kk.required' => 'No KK Tidak Boleh Kosong',
            'kepala_keluarga.required' => 'Kepala Keluarga Tidak Boleh Kosong',
            'rt.required' => 'RT Tidak Boleh Kosong',
            'rw.required' => 'RW Tidak Boleh Kosong',
            'desa.required' => 'Desa Tidak Boleh Kosong',
            'kecamatan.required' => 'Kecamatan Tidak Boleh Kosong',
            'kabupaten.required' => 'Kabupaten Tidak Boleh Kosong',
        ];
    }
}
