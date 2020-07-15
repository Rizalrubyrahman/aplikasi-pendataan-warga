<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormPendudukRequest extends FormRequest
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
            'nik' => 'required',
            'nama' => 'required|min:3',
            'tempat_lahir' => 'required|min:3',
            'tanggal_lahir' => 'required',
            'gol_darah' => 'required',
            'pekerjaan' => 'required',
            'pendidikan' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'nik.required' => 'NIK Tidak Boleh Kosong',
            'nama.required' => 'Nama Tidak Boleh Kosong',
            'nama.min' => 'Nama Minimal 3 Karakter',
            'tempat_lahir.required' => 'Tempat Lahir Tidak Boleh Kosong',
            'tempat_lahir.min' => 'Tempat Lahir Minimal 3 Karakter',
            'tanggal_lahir.required' => 'Tanggal Lahir Tidak Boleh Kosong',
            'gol_darah.required' => 'Gol Darah Tidak Boleh Kosong',
            'pekerjaan.required' => 'Pekerjaan Tidak Boleh Kosong',
            'pendidikan.required' => 'Pendidikan Tidak Boleh Kosong',
        ];
    }
}
