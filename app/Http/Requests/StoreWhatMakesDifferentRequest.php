<?php

namespace App\Http\Requests;

use App\Models\WhatMakesDifferent;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreWhatMakesDifferentRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('what_makes_different_create');
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
