@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.aboutUsSection.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.about-us-sections.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="title">{{ trans('cruds.aboutUsSection.fields.title') }}</label>
                <input class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}" type="text" name="title" id="title" value="{{ old('title', '') }}" required>
                @if($errors->has('title'))
                    <div class="invalid-feedback">
                        {{ $errors->first('title') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.aboutUsSection.fields.title_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="description">{{ trans('cruds.aboutUsSection.fields.description') }}</label>
                <textarea class="form-control ckeditor {{ $errors->has('description') ? 'is-invalid' : '' }}" name="description" id="description">{!! old('description') !!}</textarea>
                @if($errors->has('description'))
                    <div class="invalid-feedback">
                        {{ $errors->first('description') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.aboutUsSection.fields.description_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="ceo_name">{{ trans('cruds.aboutUsSection.fields.ceo_name') }}</label>
                <input class="form-control {{ $errors->has('ceo_name') ? 'is-invalid' : '' }}" type="text" name="ceo_name" id="ceo_name" value="{{ old('ceo_name', '') }}" required>
                @if($errors->has('ceo_name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('ceo_name') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.aboutUsSection.fields.ceo_name_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="ceo_description">{{ trans('cruds.aboutUsSection.fields.ceo_description') }}</label>
                <textarea class="form-control ckeditor {{ $errors->has('ceo_description') ? 'is-invalid' : '' }}" name="ceo_description" id="ceo_description">{!! old('ceo_description') !!}</textarea>
                @if($errors->has('ceo_description'))
                    <div class="invalid-feedback">
                        {{ $errors->first('ceo_description') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.aboutUsSection.fields.ceo_description_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="ceo_image">{{ trans('cruds.aboutUsSection.fields.ceo_image') }}</label>
                <div class="needsclick dropzone {{ $errors->has('ceo_image') ? 'is-invalid' : '' }}" id="ceo_image-dropzone">
                </div>
                @if($errors->has('ceo_image'))
                    <div class="invalid-feedback">
                        {{ $errors->first('ceo_image') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.aboutUsSection.fields.ceo_image_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="top_right">{{ trans('cruds.aboutUsSection.fields.top_right') }}</label>
                <div class="needsclick dropzone {{ $errors->has('top_right') ? 'is-invalid' : '' }}" id="top_right-dropzone">
                </div>
                @if($errors->has('top_right'))
                    <div class="invalid-feedback">
                        {{ $errors->first('top_right') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.aboutUsSection.fields.top_right_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="top_left">{{ trans('cruds.aboutUsSection.fields.top_left') }}</label>
                <div class="needsclick dropzone {{ $errors->has('top_left') ? 'is-invalid' : '' }}" id="top_left-dropzone">
                </div>
                @if($errors->has('top_left'))
                    <div class="invalid-feedback">
                        {{ $errors->first('top_left') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.aboutUsSection.fields.top_left_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="bottom_right">{{ trans('cruds.aboutUsSection.fields.bottom_right') }}</label>
                <div class="needsclick dropzone {{ $errors->has('bottom_right') ? 'is-invalid' : '' }}" id="bottom_right-dropzone">
                </div>
                @if($errors->has('bottom_right'))
                    <div class="invalid-feedback">
                        {{ $errors->first('bottom_right') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.aboutUsSection.fields.bottom_right_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="bottom_left">{{ trans('cruds.aboutUsSection.fields.bottom_left') }}</label>
                <div class="needsclick dropzone {{ $errors->has('bottom_left') ? 'is-invalid' : '' }}" id="bottom_left-dropzone">
                </div>
                @if($errors->has('bottom_left'))
                    <div class="invalid-feedback">
                        {{ $errors->first('bottom_left') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.aboutUsSection.fields.bottom_left_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required">{{ trans('cruds.aboutUsSection.fields.lang_code') }}</label>
                <select class="form-control {{ $errors->has('lang_code') ? 'is-invalid' : '' }}" name="lang_code" id="lang_code" required>
                    <option value disabled {{ old('lang_code', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    @foreach(App\Models\AboutUsSection::LANG_CODE_SELECT as $key => $label)
                        <option value="{{ $key }}" {{ old('lang_code', 'en') === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
                @if($errors->has('lang_code'))
                    <div class="invalid-feedback">
                        {{ $errors->first('lang_code') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.aboutUsSection.fields.lang_code_helper') }}</span>
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
    $(document).ready(function () {
  function SimpleUploadAdapter(editor) {
    editor.plugins.get('FileRepository').createUploadAdapter = function(loader) {
      return {
        upload: function() {
          return loader.file
            .then(function (file) {
              return new Promise(function(resolve, reject) {
                // Init request
                var xhr = new XMLHttpRequest();
                xhr.open('POST', '{{ route('admin.about-us-sections.storeCKEditorImages') }}', true);
                xhr.setRequestHeader('x-csrf-token', window._token);
                xhr.setRequestHeader('Accept', 'application/json');
                xhr.responseType = 'json';

                // Init listeners
                var genericErrorText = `Couldn't upload file: ${ file.name }.`;
                xhr.addEventListener('error', function() { reject(genericErrorText) });
                xhr.addEventListener('abort', function() { reject() });
                xhr.addEventListener('load', function() {
                  var response = xhr.response;

                  if (!response || xhr.status !== 201) {
                    return reject(response && response.message ? `${genericErrorText}\n${xhr.status} ${response.message}` : `${genericErrorText}\n ${xhr.status} ${xhr.statusText}`);
                  }

                  $('form').append('<input type="hidden" name="ck-media[]" value="' + response.id + '">');

                  resolve({ default: response.url });
                });

                if (xhr.upload) {
                  xhr.upload.addEventListener('progress', function(e) {
                    if (e.lengthComputable) {
                      loader.uploadTotal = e.total;
                      loader.uploaded = e.loaded;
                    }
                  });
                }

                // Send request
                var data = new FormData();
                data.append('upload', file);
                data.append('crud_id', '{{ $aboutUsSection->id ?? 0 }}');
                xhr.send(data);
              });
            })
        }
      };
    }
  }

  var allEditors = document.querySelectorAll('.ckeditor');
  for (var i = 0; i < allEditors.length; ++i) {
    ClassicEditor.create(
      allEditors[i], {
        extraPlugins: [SimpleUploadAdapter]
      }
    );
  }
});
</script>

<script>
    Dropzone.options.ceoImageDropzone = {
    url: '{{ route('admin.about-us-sections.storeMedia') }}',
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
      $('form').find('input[name="ceo_image"]').remove()
      $('form').append('<input type="hidden" name="ceo_image" value="' + response.name + '">')
    },
    removedfile: function (file) {
      file.previewElement.remove()
      if (file.status !== 'error') {
        $('form').find('input[name="ceo_image"]').remove()
        this.options.maxFiles = this.options.maxFiles + 1
      }
    },
    init: function () {
@if(isset($aboutUsSection) && $aboutUsSection->ceo_image)
      var file = {!! json_encode($aboutUsSection->ceo_image) !!}
          this.options.addedfile.call(this, file)
      this.options.thumbnail.call(this, file, file.preview ?? file.preview_url)
      file.previewElement.classList.add('dz-complete')
      $('form').append('<input type="hidden" name="ceo_image" value="' + file.file_name + '">')
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
    Dropzone.options.topRightDropzone = {
    url: '{{ route('admin.about-us-sections.storeMedia') }}',
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
      $('form').find('input[name="top_right"]').remove()
      $('form').append('<input type="hidden" name="top_right" value="' + response.name + '">')
    },
    removedfile: function (file) {
      file.previewElement.remove()
      if (file.status !== 'error') {
        $('form').find('input[name="top_right"]').remove()
        this.options.maxFiles = this.options.maxFiles + 1
      }
    },
    init: function () {
@if(isset($aboutUsSection) && $aboutUsSection->top_right)
      var file = {!! json_encode($aboutUsSection->top_right) !!}
          this.options.addedfile.call(this, file)
      this.options.thumbnail.call(this, file, file.preview ?? file.preview_url)
      file.previewElement.classList.add('dz-complete')
      $('form').append('<input type="hidden" name="top_right" value="' + file.file_name + '">')
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
    Dropzone.options.topLeftDropzone = {
    url: '{{ route('admin.about-us-sections.storeMedia') }}',
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
      $('form').find('input[name="top_left"]').remove()
      $('form').append('<input type="hidden" name="top_left" value="' + response.name + '">')
    },
    removedfile: function (file) {
      file.previewElement.remove()
      if (file.status !== 'error') {
        $('form').find('input[name="top_left"]').remove()
        this.options.maxFiles = this.options.maxFiles + 1
      }
    },
    init: function () {
@if(isset($aboutUsSection) && $aboutUsSection->top_left)
      var file = {!! json_encode($aboutUsSection->top_left) !!}
          this.options.addedfile.call(this, file)
      this.options.thumbnail.call(this, file, file.preview ?? file.preview_url)
      file.previewElement.classList.add('dz-complete')
      $('form').append('<input type="hidden" name="top_left" value="' + file.file_name + '">')
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
    Dropzone.options.bottomRightDropzone = {
    url: '{{ route('admin.about-us-sections.storeMedia') }}',
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
      $('form').find('input[name="bottom_right"]').remove()
      $('form').append('<input type="hidden" name="bottom_right" value="' + response.name + '">')
    },
    removedfile: function (file) {
      file.previewElement.remove()
      if (file.status !== 'error') {
        $('form').find('input[name="bottom_right"]').remove()
        this.options.maxFiles = this.options.maxFiles + 1
      }
    },
    init: function () {
@if(isset($aboutUsSection) && $aboutUsSection->bottom_right)
      var file = {!! json_encode($aboutUsSection->bottom_right) !!}
          this.options.addedfile.call(this, file)
      this.options.thumbnail.call(this, file, file.preview ?? file.preview_url)
      file.previewElement.classList.add('dz-complete')
      $('form').append('<input type="hidden" name="bottom_right" value="' + file.file_name + '">')
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
    Dropzone.options.bottomLeftDropzone = {
    url: '{{ route('admin.about-us-sections.storeMedia') }}',
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
      $('form').find('input[name="bottom_left"]').remove()
      $('form').append('<input type="hidden" name="bottom_left" value="' + response.name + '">')
    },
    removedfile: function (file) {
      file.previewElement.remove()
      if (file.status !== 'error') {
        $('form').find('input[name="bottom_left"]').remove()
        this.options.maxFiles = this.options.maxFiles + 1
      }
    },
    init: function () {
@if(isset($aboutUsSection) && $aboutUsSection->bottom_left)
      var file = {!! json_encode($aboutUsSection->bottom_left) !!}
          this.options.addedfile.call(this, file)
      this.options.thumbnail.call(this, file, file.preview ?? file.preview_url)
      file.previewElement.classList.add('dz-complete')
      $('form').append('<input type="hidden" name="bottom_left" value="' + file.file_name + '">')
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