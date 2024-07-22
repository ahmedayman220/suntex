<?php

namespace App\Http\Requests;

use App\Models\WhatMakesDifferent;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateWhatMakesDifferentRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('what_makes_different_edit');
    }

    public function rules()
    {
        return [
            'title' => [
                'string',
                'required',
            ],
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
