@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.aboutUs.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.about-uss.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.aboutUs.fields.id') }}
                        </th>
                        <td>
                            {{ $aboutUs->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.aboutUs.fields.title') }}
                        </th>
                        <td>
                            {{ $aboutUs->title }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.aboutUs.fields.description') }}
                        </th>
                        <td>
                            {{ $aboutUs->description }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.aboutUs.fields.ceo_name') }}
                        </th>
                        <td>
                            {{ $aboutUs->ceo_name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.aboutUs.fields.ceo_description') }}
                        </th>
                        <td>
                            {{ $aboutUs->ceo_description }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.aboutUs.fields.image_1') }}
                        </th>
                        <td>
                            @if($aboutUs->image_1)
                                <a href="{{ $aboutUs->image_1->getUrl() }}" target="_blank" style="display: inline-block">
                                    <img src="{{ $aboutUs->image_1->getUrl('thumb') }}">
                                </a>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.aboutUs.fields.image_2') }}
                        </th>
                        <td>
                            @if($aboutUs->image_2)
                                <a href="{{ $aboutUs->image_2->getUrl() }}" target="_blank" style="display: inline-block">
                                    <img src="{{ $aboutUs->image_2->getUrl('thumb') }}">
                                </a>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.aboutUs.fields.image_3') }}
                        </th>
                        <td>
                            @if($aboutUs->image_3)
                                <a href="{{ $aboutUs->image_3->getUrl() }}" target="_blank" style="display: inline-block">
                                    <img src="{{ $aboutUs->image_3->getUrl('thumb') }}">
                                </a>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.aboutUs.fields.image_4') }}
                        </th>
                        <td>
                            @if($aboutUs->image_4)
                                <a href="{{ $aboutUs->image_4->getUrl() }}" target="_blank" style="display: inline-block">
                                    <img src="{{ $aboutUs->image_4->getUrl('thumb') }}">
                                </a>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.aboutUs.fields.lang_code') }}
                        </th>
                        <td>
                            {{ App\Models\AboutUs::LANG_CODE_SELECT[$aboutUs->lang_code] ?? '' }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.about-uss.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection