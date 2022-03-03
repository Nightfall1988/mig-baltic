<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
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
            'EAN13' => 'required|max:255',
            'Nosaukums' => 'required|max:255',
            'Atlikums' => 'required|integer',
            'Pašizmaksa' => 'required|integer',
            'Cena'=> 'required|integer'
        ];
    }
}
