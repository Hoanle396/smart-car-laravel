<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Car extends FormRequest
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
            'brand'=>'required',
        'manufacture'=>'required',
        'kilomet'=>'required',
        'images'=>'',
        'name_vi'=>'required',
        'description_vi'=>'required',
        'name_en'=>'required',
        'description_en'=>'required',
        'name_jp'=>'required',
        'description_jp'=>'required',
        'name_ko'=>'required',
        'description_ko'=>'required',
        'name_cn'=>'required',
        'description_cn'=>'required',
        'name_pt'=>'required',
        'description_pt'=>'required',
        ];
    }
}
