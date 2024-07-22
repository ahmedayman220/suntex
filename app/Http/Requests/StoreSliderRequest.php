<?php

namespace App\Http\Requests;

use App\Models\Slider;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreSliderRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('slider_create');
    }

    public function rules()
    {
        return [
            'title' => [
                'string',
                'max:45',
                'required',
            ],
            'description' => [
                'required',
            ],
            'lang_code' => [
                'required',
            ],
            'image' => [
                'required',
            ],
            'hero_image' => [
                'required',
            ],
        ];
    }
}
