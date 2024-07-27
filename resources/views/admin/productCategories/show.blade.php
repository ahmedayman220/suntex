@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.productCategory.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.product-categories.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.productCategory.fields.id') }}
                        </th>
                        <td>
                            {{ $productCategory->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.productCategory.fields.name_ar') }}
                        </th>
                        <td>
                            {{ $productCategory->name_ar }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.productCategory.fields.name_en') }}
                        </th>
                        <td>
                            {{ $productCategory->name_en }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.productCategory.fields.name_he') }}
                        </th>
                        <td>
                            {{ $productCategory->name_he }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.productCategory.fields.description_ar') }}
                        </th>
                        <td>
                            {!! $productCategory->description_ar !!}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.productCategory.fields.description_en') }}
                        </th>
                        <td>
                            {!! $productCategory->description_en !!}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.productCategory.fields.description_he') }}
                        </th>
                        <td>
                            {!! $productCategory->description_he !!}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.productCategory.fields.photo') }}
                        </th>
                        <td>
                            @if($productCategory->photo)
                                <a href="{{ $productCategory->photo->getUrl() }}" target="_blank" style="display: inline-block">
                                    <img src="{{ $productCategory->photo->getUrl('thumb') }}">
                                </a>
                            @endif
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.product-categories.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-header">
        {{ trans('global.relatedData') }}
    </div>
    <ul class="nav nav-tabs" role="tablist" id="relationship-tabs">
        <li class="nav-item">
            <a class="nav-link" href="#category_products" role="tab" data-toggle="tab">
                {{ trans('cruds.product.title') }}
            </a>
        </li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane" role="tabpanel" id="category_products">
            @includeIf('admin.productCategories.relationships.categoryProducts', ['products' => $productCategory->categoryProducts])
        </div>
    </div>
</div>

@endsection