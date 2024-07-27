<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\StoreAboutUsSectionRequest;
use App\Http\Requests\UpdateAboutUsSectionRequest;
use App\Http\Resources\Admin\AboutUsSectionResource;
use App\Models\AboutUsSection;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AboutUsSectionApiController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('about_us_section_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new AboutUsSectionResource(AboutUsSection::all());
    }

    public function store(StoreAboutUsSectionRequest $request)
    {
        $aboutUsSection = AboutUsSection::create($request->all());

        if ($request->input('ceo_image', false)) {
            $aboutUsSection->addMedia(storage_path('tmp/uploads/' . basename($request->input('ceo_image'))))->toMediaCollection('ceo_image');
        }

        if ($request->input('top_right', false)) {
            $aboutUsSection->addMedia(storage_path('tmp/uploads/' . basename($request->input('top_right'))))->toMediaCollection('top_right');
        }

        if ($request->input('top_left', false)) {
            $aboutUsSection->addMedia(storage_path('tmp/uploads/' . basename($request->input('top_left'))))->toMediaCollection('top_left');
        }

        if ($request->input('bottom_right', false)) {
            $aboutUsSection->addMedia(storage_path('tmp/uploads/' . basename($request->input('bottom_right'))))->toMediaCollection('bottom_right');
        }

        if ($request->input('bottom_left', false)) {
            $aboutUsSection->addMedia(storage_path('tmp/uploads/' . basename($request->input('bottom_left'))))->toMediaCollection('bottom_left');
        }

        return (new AboutUsSectionResource($aboutUsSection))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(AboutUsSection $aboutUsSection)
    {
        abort_if(Gate::denies('about_us_section_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new AboutUsSectionResource($aboutUsSection);
    }

    public function update(UpdateAboutUsSectionRequest $request, AboutUsSection $aboutUsSection)
    {
        $aboutUsSection->update($request->all());

        if ($request->input('ceo_image', false)) {
            if (! $aboutUsSection->ceo_image || $request->input('ceo_image') !== $aboutUsSection->ceo_image->file_name) {
                if ($aboutUsSection->ceo_image) {
                    $aboutUsSection->ceo_image->delete();
                }
                $aboutUsSection->addMedia(storage_path('tmp/uploads/' . basename($request->input('ceo_image'))))->toMediaCollection('ceo_image');
            }
        } elseif ($aboutUsSection->ceo_image) {
            $aboutUsSection->ceo_image->delete();
        }

        if ($request->input('top_right', false)) {
            if (! $aboutUsSection->top_right || $request->input('top_right') !== $aboutUsSection->top_right->file_name) {
                if ($aboutUsSection->top_right) {
                    $aboutUsSection->top_right->delete();
                }
                $aboutUsSection->addMedia(storage_path('tmp/uploads/' . basename($request->input('top_right'))))->toMediaCollection('top_right');
            }
        } elseif ($aboutUsSection->top_right) {
            $aboutUsSection->top_right->delete();
        }

        if ($request->input('top_left', false)) {
            if (! $aboutUsSection->top_left || $request->input('top_left') !== $aboutUsSection->top_left->file_name) {
                if ($aboutUsSection->top_left) {
                    $aboutUsSection->top_left->delete();
                }
                $aboutUsSection->addMedia(storage_path('tmp/uploads/' . basename($request->input('top_left'))))->toMediaCollection('top_left');
            }
        } elseif ($aboutUsSection->top_left) {
            $aboutUsSection->top_left->delete();
        }

        if ($request->input('bottom_right', false)) {
            if (! $aboutUsSection->bottom_right || $request->input('bottom_right') !== $aboutUsSection->bottom_right->file_name) {
                if ($aboutUsSection->bottom_right) {
                    $aboutUsSection->bottom_right->delete();
                }
                $aboutUsSection->addMedia(storage_path('tmp/uploads/' . basename($request->input('bottom_right'))))->toMediaCollection('bottom_right');
            }
        } elseif ($aboutUsSection->bottom_right) {
            $aboutUsSection->bottom_right->delete();
        }

        if ($request->input('bottom_left', false)) {
            if (! $aboutUsSection->bottom_left || $request->input('bottom_left') !== $aboutUsSection->bottom_left->file_name) {
                if ($aboutUsSection->bottom_left) {
                    $aboutUsSection->bottom_left->delete();
                }
                $aboutUsSection->addMedia(storage_path('tmp/uploads/' . basename($request->input('bottom_left'))))->toMediaCollection('bottom_left');
            }
        } elseif ($aboutUsSection->bottom_left) {
            $aboutUsSection->bottom_left->delete();
        }

        return (new AboutUsSectionResource($aboutUsSection))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(AboutUsSection $aboutUsSection)
    {
        abort_if(Gate::denies('about_us_section_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $aboutUsSection->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
