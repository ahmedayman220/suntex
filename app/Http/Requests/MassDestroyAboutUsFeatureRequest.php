<?php

namespace App\Http\Requests;

use App\Models\AboutUsFeature;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyAboutUsFeatureRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('about_us_feature_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:about_us_features,id',
        ];
    }
}
