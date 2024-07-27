<?php

namespace App\Http\Requests;

use App\Models\ProductCategory;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateProductCategoryRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('product_category_edit');
    }

    public function rules()
    {
        return [
            'name_ar' => [
                'string',
                'required',
            ],
            'name_en' => [
                'string',
                'required',
            ],
            'name_he' => [
                'string',
                'required',
            ],
            'description_ar' => [
                'required',
            ],
            'description_en' => [
                'required',
            ],
            'description_he' => [
                'required',
            ],
            'photo' => [
                'required',
            ],
        ];
    }
}
