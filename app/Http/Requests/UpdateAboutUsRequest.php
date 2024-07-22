<?php

namespace App\Http\Requests;

use App\Models\AboutUs;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateAboutUsRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('about_us_edit');
    }

    public function rules()
    {
        return [
            'title' => [
                'string',
                'required',
            ],
            'description' => [
                'required',
            ],
            'ceo_name' => [
                'string',
                'required',
            ],
            'ceo_description' => [
                'string',
                'required',
            ],
            'image_1' => [
                'required',
            ],
            'image_2' => [
                'required',
            ],
            'image_3' => [
                'required',
            ],
            'image_4' => [
                'required',
            ],
            'lang_code' => [
                'required',
            ],
        ];
    }
}
