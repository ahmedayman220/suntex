<?php

namespace App\Http\Requests;

use App\Models\Setting;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateSettingRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('setting_edit');
    }

    public function rules()
    {
        return [
            'company_name' => [
                'string',
                'required',
            ],
            'phone_number' => [
                'string',
                'required',
            ],
            'address' => [
                'string',
                'required',
            ],
            'facebook_link' => [
                'string',
                'nullable',
            ],
            'instegram_link' => [
                'string',
                'nullable',
            ],
            'snapchat_link' => [
                'string',
                'nullable',
            ],
            'tiktok_link' => [
                'string',
                'nullable',
            ],
            'youtube_link' => [
                'string',
                'nullable',
            ],
            'top_bar_content_header' => [
                'string',
                'nullable',
            ],
            'logo' => [
                'required',
            ],
            'fav_icon' => [
                'required',
            ],
        ];
    }
}
