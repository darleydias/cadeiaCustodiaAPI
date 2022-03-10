<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateCasoFormRequest extends FormRequest
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
            'nomeCaso'=>'required|unique:casos|min:3|max:50',
            'titular'=>'required|min:3|max:50',
            'dtInicio'=>'nullable',
            'category_id'=>'required',
            'statuses_id'=>'required',
        ];
    }
}
