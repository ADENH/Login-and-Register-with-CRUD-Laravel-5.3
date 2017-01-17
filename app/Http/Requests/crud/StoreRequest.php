<?php

namespace Tutorial\Http\Requests\crud;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
        'nama'=>'Required',
        'alamat'=>'Required',
        'tanggal_lahir'=>'Required',
        'pekerjaan'=>'Required'
            //
        ];
    }

     public function messages()
    {
        return [
            'nama.required' => 'Nama Tidak Boleh Kosong.',
            'alamat.required' => 'Alamat Tidak Boleh Kosong.',
            'tanggal_lahir.required' => 'Tanggal Lahir Tidak Boleh Kosong.',
            'pekerjaan.required' => 'Pekerjaan Tidak Boleh Kosong.'
        ];
    }
}
