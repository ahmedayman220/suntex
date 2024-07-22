@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.whatMakesDifferent.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.what-makes-differents.update", [$whatMakesDifferent->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required" for="title">{{ trans('cruds.whatMakesDifferent.fields.title') }}</label>
                <input class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}" type="text" name="title" id="title" value="{{ old('title', $whatMakesDifferent->title) }}" required>
                @if($errors->has('title'))
                    <div class="invalid-feedback">
                        {{ $errors->first('title') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.whatMakesDifferent.fields.title_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="description">{{ trans('cruds.whatMakesDifferent.fields.description') }}</label>
                <input class="form-control {{ $errors->has('description') ? 'is-invalid' : '' }}" type="text" name="description" id="description" value="{{ old('description', $whatMakesDifferent->description) }}" required>
                @if($errors->has('description'))
                    <div class="invalid-feedback">
                        {{ $errors->first('description') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.whatMakesDifferent.fields.description_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required">{{ trans('cruds.whatMakesDifferent.fields.lang_code') }}</label>
                <select class="form-control {{ $errors->has('lang_code') ? 'is-invalid' : '' }}" name="lang_code" id="lang_code" required>
                    <option value disabled {{ old('lang_code', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    @foreach(App\Models\WhatMakesDifferent::LANG_CODE_SELECT as $key => $label)
                        <option value="{{ $key }}" {{ old('lang_code', $whatMakesDifferent->lang_code) === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
                @if($errors->has('lang_code'))
                    <div class="invalid-feedback">
                        {{ $errors->first('lang_code') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.whatMakesDifferent.fields.lang_code_helper') }}</span>
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