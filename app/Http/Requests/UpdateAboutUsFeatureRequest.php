<?php

namespace App\Http\Requests;

use App\Models\AboutUsFeature;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateAboutUsFeatureRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('about_us_feature_edit');
    }

    public function rules()
    {
        return [
            'description' => [
                'string',
                'required',
            ],
            'lang_code' => [
                'required',
            ],
        ];
    }
}
