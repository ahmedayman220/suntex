<?php

namespace App\Http\Requests;

use App\Models\AboutUsSection;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateAboutUsSectionRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('about_us_section_edit');
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
                'required',
            ],
            'ceo_image' => [
                'required',
            ],
            'top_right' => [
                'required',
            ],
            'top_left' => [
                'required',
            ],
            'bottom_right' => [
                'required',
            ],
            'bottom_left' => [
                'required',
            ],
            'lang_code' => [
                'required',
            ],
        ];
    }
}
