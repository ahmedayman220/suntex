@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.aboutUsSection.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.about-us-sections.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.aboutUsSection.fields.id') }}
                        </th>
                        <td>
                            {{ $aboutUsSection->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.aboutUsSection.fields.title') }}
                        </th>
                        <td>
                            {{ $aboutUsSection->title }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.aboutUsSection.fields.description') }}
                        </th>
                        <td>
                            {!! $aboutUsSection->description !!}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.aboutUsSection.fields.ceo_name') }}
                        </th>
                        <td>
                            {{ $aboutUsSection->ceo_name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.aboutUsSection.fields.ceo_description') }}
                        </th>
                        <td>
                            {!! $aboutUsSection->ceo_description !!}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.aboutUsSection.fields.ceo_image') }}
                        </th>
                        <td>
                            @if($aboutUsSection->ceo_image)
                                <a href="{{ $aboutUsSection->ceo_image->getUrl() }}" target="_blank" style="display: inline-block">
                                    <img src="{{ $aboutUsSection->ceo_image->getUrl('thumb') }}">
                                </a>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.aboutUsSection.fields.top_right') }}
                        </th>
                        <td>
                            @if($aboutUsSection->top_right)
                                <a href="{{ $aboutUsSection->top_right->getUrl() }}" target="_blank" style="display: inline-block">
                                    <img src="{{ $aboutUsSection->top_right->getUrl('thumb') }}">
                                </a>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.aboutUsSection.fields.top_left') }}
                        </th>
                        <td>
                            @if($aboutUsSection->top_left)
                                <a href="{{ $aboutUsSection->top_left->getUrl() }}" target="_blank" style="display: inline-block">
                                    <img src="{{ $aboutUsSection->top_left->getUrl('thumb') }}">
                                </a>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.aboutUsSection.fields.bottom_right') }}
                        </th>
                        <td>
                            @if($aboutUsSection->bottom_right)
                                <a href="{{ $aboutUsSection->bottom_right->getUrl() }}" target="_blank" style="display: inline-block">
                                    <img src="{{ $aboutUsSection->bottom_right->getUrl('thumb') }}">
                                </a>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.aboutUsSection.fields.bottom_left') }}
                        </th>
                        <td>
                            @if($aboutUsSection->bottom_left)
                                <a href="{{ $aboutUsSection->bottom_left->getUrl() }}" target="_blank" style="display: inline-block">
                                    <img src="{{ $aboutUsSection->bottom_left->getUrl('thumb') }}">
                                </a>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.aboutUsSection.fields.lang_code') }}
                        </th>
                        <td>
                            {{ App\Models\AboutUsSection::LANG_CODE_SELECT[$aboutUsSection->lang_code] ?? '' }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.about-us-sections.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection