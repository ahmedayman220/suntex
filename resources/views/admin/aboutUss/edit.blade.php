@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.aboutUs.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.about-uss.update", [$aboutUs->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required" for="title">{{ trans('cruds.aboutUs.fields.title') }}</label>
                <input class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}" type="text" name="title" id="title" value="{{ old('title', $aboutUs->title) }}" required>
                @if($errors->has('title'))
                    <div class="invalid-feedback">
                        {{ $errors->first('title') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.aboutUs.fields.title_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="description">{{ trans('cruds.aboutUs.fields.description') }}</label>
                <textarea class="form-control {{ $errors->has('description') ? 'is-invalid' : '' }}" name="description" id="description" required>{{ old('description', $aboutUs->description) }}</textarea>
                @if($errors->has('description'))
                    <div class="invalid-feedback">
                        {{ $errors->first('description') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.aboutUs.fields.description_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="ceo_name">{{ trans('cruds.aboutUs.fields.ceo_name') }}</label>
                <input class="form-control {{ $errors->has('ceo_name') ? 'is-invalid' : '' }}" type="text" name="ceo_name" id="ceo_name" value="{{ old('ceo_name', $aboutUs->ceo_name) }}" required>
                @if($errors->has('ceo_name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('ceo_name') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.aboutUs.fields.ceo_name_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="ceo_description">{{ trans('cruds.aboutUs.fields.ceo_description') }}</label>
                <input class="form-control {{ $errors->has('ceo_description') ? 'is-invalid' : '' }}" type="text" name="ceo_description" id="ceo_description" value="{{ old('ceo_description', $aboutUs->ceo_description) }}" required>
                @if($errors->has('ceo_description'))
                    <div class="invalid-feedback">
                        {{ $errors->first('ceo_description') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.aboutUs.fields.ceo_description_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="image_1">{{ trans('cruds.aboutUs.fields.image_1') }}</label>
                <div class="needsclick dropzone {{ $errors->has('image_1') ? 'is-invalid' : '' }}" id="image_1-dropzone">
                </div>
                @if($errors->has('image_1'))
                    <div class="invalid-feedback">
                        {{ $errors->first('image_1') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.aboutUs.fields.image_1_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="image_2">{{ trans('cruds.aboutUs.fields.image_2') }}</label>
                <div class="needsclick dropzone {{ $errors->has('image_2') ? 'is-invalid' : '' }}" id="image_2-dropzone">
                </div>
                @if($errors->has('image_2'))
                    <div class="invalid-feedback">
                        {{ $errors->first('image_2') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.aboutUs.fields.image_2_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="image_3">{{ trans('cruds.aboutUs.fields.image_3') }}</label>
                <div class="needsclick dropzone {{ $errors->has('image_3') ? 'is-invalid' : '' }}" id="image_3-dropzone">
                </div>
                @if($errors->has('image_3'))
                    <div class="invalid-feedback">
                        {{ $errors->first('image_3') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.aboutUs.fields.image_3_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="image_4">{{ trans('cruds.aboutUs.fields.image_4') }}</label>
                <div class="needsclick dropzone {{ $errors->has('image_4') ? 'is-invalid' : '' }}" id="image_4-dropzone">
                </div>
                @if($errors->has('image_4'))
                    <div class="invalid-feedback">
                        {{ $errors->first('image_4') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.aboutUs.fields.image_4_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required">{{ trans('cruds.aboutUs.fields.lang_code') }}</label>
                <select class="form-control {{ $errors->has('lang_code') ? 'is-invalid' : '' }}" name="lang_code" id="lang_code" required>
                    <option value disabled {{ old('lang_code', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    @foreach(App\Models\AboutUs::LANG_CODE_SELECT as $key => $label)
                        <option value="{{ $key }}" {{ old('lang_code', $aboutUs->lang_code) === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
                @if($errors->has('lang_code'))
                    <div class="invalid-feedback">
                        {{ $errors->first('lang_code') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.aboutUs.fields.lang_code_helper') }}</span>
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

@section('scripts')
<script>
    Dropzone.options.image1Dropzone = {
    url: '{{ route('admin.about-uss.storeMedia') }}',
    maxFilesize: 2, // MB
    acceptedFiles: '.jpeg,.jpg,.png,.gif',
    maxFiles: 1,
    addRemoveLinks: true,
    headers: {
      'X-CSRF-TOKEN': "{{ csrf_token() }}"
    },
    params: {
      size: 2,
      width: 4096,
      height: 4096
    },
    success: function (file, response) {
      $('form').find('input[name="image_1"]').remove()
      $('form').append('<input type="hidden" name="image_1" value="' + response.name + '">')
    },
    removedfile: function (file) {
      file.previewElement.remove()
      if (file.status !== 'error') {
        $('form').find('input[name="image_1"]').remove()
        this.options.maxFiles = this.options.maxFiles + 1
      }
    },
    init: function () {
@if(isset($aboutUs) && $aboutUs->image_1)
      var file = {!! json_encode($aboutUs->image_1) !!}
          this.options.addedfile.call(this, file)
      this.options.thumbnail.call(this, file, file.preview ?? file.preview_url)
      file.previewElement.classList.add('dz-complete')
      $('form').append('<input type="hidden" name="image_1" value="' + file.file_name + '">')
      this.options.maxFiles = this.options.maxFiles - 1
@endif
    },
    error: function (file, response) {
        if ($.type(response) === 'string') {
            var message = response //dropzone sends it's own error messages in string
        } else {
            var message = response.errors.file
        }
        file.previewElement.classList.add('dz-error')
        _ref = file.previewElement.querySelectorAll('[data-dz-errormessage]')
        _results = []
        for (_i = 0, _len = _ref.length; _i < _len; _i++) {
            node = _ref[_i]
            _results.push(node.textContent = message)
        }

        return _results
    }
}

</script>
<script>
    Dropzone.options.image2Dropzone = {
    url: '{{ route('admin.about-uss.storeMedia') }}',
    maxFilesize: 2, // MB
    acceptedFiles: '.jpeg,.jpg,.png,.gif',
    maxFiles: 1,
    addRemoveLinks: true,
    headers: {
      'X-CSRF-TOKEN': "{{ csrf_token() }}"
    },
    params: {
      size: 2,
      width: 4096,
      height: 4096
    },
    success: function (file, response) {
      $('form').find('input[name="image_2"]').remove()
      $('form').append('<input type="hidden" name="image_2" value="' + response.name + '">')
    },
    removedfile: function (file) {
      file.previewElement.remove()
      if (file.status !== 'error') {
        $('form').find('input[name="image_2"]').remove()
        this.options.maxFiles = this.options.maxFiles + 1
      }
    },
    init: function () {
@if(isset($aboutUs) && $aboutUs->image_2)
      var file = {!! json_encode($aboutUs->image_2) !!}
          this.options.addedfile.call(this, file)
      this.options.thumbnail.call(this, file, file.preview ?? file.preview_url)
      file.previewElement.classList.add('dz-complete')
      $('form').append('<input type="hidden" name="image_2" value="' + file.file_name + '">')
      this.options.maxFiles = this.options.maxFiles - 1
@endif
    },
    error: function (file, response) {
        if ($.type(response) === 'string') {
            var message = response //dropzone sends it's own error messages in string
        } else {
            var message = response.errors.file
        }
        file.previewElement.classList.add('dz-error')
        _ref = file.previewElement.querySelectorAll('[data-dz-errormessage]')
        _results = []
        for (_i = 0, _len = _ref.length; _i < _len; _i++) {
            node = _ref[_i]
            _results.push(node.textContent = message)
        }

        return _results
    }
}

</script>
<script>
    Dropzone.options.image3Dropzone = {
    url: '{{ route('admin.about-uss.storeMedia') }}',
    maxFilesize: 2, // MB
    acceptedFiles: '.jpeg,.jpg,.png,.gif',
    maxFiles: 1,
    addRemoveLinks: true,
    headers: {
      'X-CSRF-TOKEN': "{{ csrf_token() }}"
    },
    params: {
      size: 2,
      width: 4096,
      height: 4096
    },
    success: function (file, response) {
      $('form').find('input[name="image_3"]').remove()
      $('form').append('<input type="hidden" name="image_3" value="' + response.name + '">')
    },
    removedfile: function (file) {
      file.previewElement.remove()
      if (file.status !== 'error') {
        $('form').find('input[name="image_3"]').remove()
        this.options.maxFiles = this.options.maxFiles + 1
      }
    },
    init: function () {
@if(isset($aboutUs) && $aboutUs->image_3)
      var file = {!! json_encode($aboutUs->image_3) !!}
          this.options.addedfile.call(this, file)
      this.options.thumbnail.call(this, file, file.preview ?? file.preview_url)
      file.previewElement.classList.add('dz-complete')
      $('form').append('<input type="hidden" name="image_3" value="' + file.file_name + '">')
      this.options.maxFiles = this.options.maxFiles - 1
@endif
    },
    error: function (file, response) {
        if ($.type(response) === 'string') {
            var message = response //dropzone sends it's own error messages in string
        } else {
            var message = response.errors.file
        }
        file.previewElement.classList.add('dz-error')
        _ref = file.previewElement.querySelectorAll('[data-dz-errormessage]')
        _results = []
        for (_i = 0, _len = _ref.length; _i < _len; _i++) {
            node = _ref[_i]
            _results.push(node.textContent = message)
        }

        return _results
    }
}

</script>
<script>
    Dropzone.options.image4Dropzone = {
    url: '{{ route('admin.about-uss.storeMedia') }}',
    maxFilesize: 2, // MB
    acceptedFiles: '.jpeg,.jpg,.png,.gif',
    maxFiles: 1,
    addRemoveLinks: true,
    headers: {
      'X-CSRF-TOKEN': "{{ csrf_token() }}"
    },
    params: {
      size: 2,
      width: 4096,
      height: 4096
    },
    success: function (file, response) {
      $('form').find('input[name="image_4"]').remove()
      $('form').append('<input type="hidden" name="image_4" value="' + response.name + '">')
    },
    removedfile: function (file) {
      file.previewElement.remove()
      if (file.status !== 'error') {
        $('form').find('input[name="image_4"]').remove()
        this.options.maxFiles = this.options.maxFiles + 1
      }
    },
    init: function () {
@if(isset($aboutUs) && $aboutUs->image_4)
      var file = {!! json_encode($aboutUs->image_4) !!}
          this.options.addedfile.call(this, file)
      this.options.thumbnail.call(this, file, file.preview ?? file.preview_url)
      file.previewElement.classList.add('dz-complete')
      $('form').append('<input type="hidden" name="image_4" value="' + file.file_name + '">')
      this.options.maxFiles = this.options.maxFiles - 1
@endif
    },
    error: function (file, response) {
        if ($.type(response) === 'string') {
            var message = response //dropzone sends it's own error messages in string
        } else {
            var message = response.errors.file
        }
        file.previewElement.classList.add('dz-error')
        _ref = file.previewElement.querySelectorAll('[data-dz-errormessage]')
        _results = []
        for (_i = 0, _len = _ref.length; _i < _len; _i++) {
            node = _ref[_i]
            _results.push(node.textContent = message)
        }

        return _results
    }
}

</script>
@endsection