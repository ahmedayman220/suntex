@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.aboutUsFeature.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.about-us-features.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="description">{{ trans('cruds.aboutUsFeature.fields.description') }}</label>
                <input class="form-control {{ $errors->has('description') ? 'is-invalid' : '' }}" type="text" name="description" id="description" value="{{ old('description', '') }}" required>
                @if($errors->has('description'))
                    <div class="invalid-feedback">
                        {{ $errors->first('description') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.aboutUsFeature.fields.description_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required">{{ trans('cruds.aboutUsFeature.fields.lang_code') }}</label>
                <select class="form-control {{ $errors->has('lang_code') ? 'is-invalid' : '' }}" name="lang_code" id="lang_code" required>
                    <option value disabled {{ old('lang_code', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    @foreach(App\Models\AboutUsFeature::LANG_CODE_SELECT as $key => $label)
                        <option value="{{ $key }}" {{ old('lang_code', 'en') === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
                @if($errors->has('lang_code'))
                    <div class="invalid-feedback">
                        {{ $errors->first('lang_code') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.aboutUsFeature.fields.lang_code_helper') }}</span>
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>



@endsection