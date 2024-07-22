<?php

namespace App\Http\Requests;

use App\Models\WhatMakesDifferent;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyWhatMakesDifferentRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('what_makes_different_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:what_makes_differents,id',
        ];
    }
}
