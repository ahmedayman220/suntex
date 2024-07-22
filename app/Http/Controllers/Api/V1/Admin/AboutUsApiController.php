<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\StoreAboutUsRequest;
use App\Http\Requests\UpdateAboutUsRequest;
use App\Http\Resources\Admin\AboutUsResource;
use App\Models\AboutUs;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AboutUsApiController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('about_us_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new AboutUsResource(AboutUs::all());
    }

    public function store(StoreAboutUsRequest $request)
    {
        $aboutUs = AboutUs::create($request->all());

        if ($request->input('image_1', false)) {
            $aboutUs->addMedia(storage_path('tmp/uploads/' . basename($request->input('image_1'))))->toMediaCollection('image_1');
        }

        if ($request->input('image_2', false)) {
            $aboutUs->addMedia(storage_path('tmp/uploads/' . basename($request->input('image_2'))))->toMediaCollection('image_2');
        }

        if ($request->input('image_3', false)) {
            $aboutUs->addMedia(storage_path('tmp/uploads/' . basename($request->input('image_3'))))->toMediaCollection('image_3');
        }

        if ($request->input('image_4', false)) {
            $aboutUs->addMedia(storage_path('tmp/uploads/' . basename($request->input('image_4'))))->toMediaCollection('image_4');
        }

        return (new AboutUsResource($aboutUs))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(AboutUs $aboutUs)
    {
        abort_if(Gate::denies('about_us_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new AboutUsResource($aboutUs);
    }

    public function update(UpdateAboutUsRequest $request, AboutUs $aboutUs)
    {
        $aboutUs->update($request->all());

        if ($request->input('image_1', false)) {
            if (! $aboutUs->image_1 || $request->input('image_1') !== $aboutUs->image_1->file_name) {
                if ($aboutUs->image_1) {
                    $aboutUs->image_1->delete();
                }
                $aboutUs->addMedia(storage_path('tmp/uploads/' . basename($request->input('image_1'))))->toMediaCollection('image_1');
            }
        } elseif ($aboutUs->image_1) {
            $aboutUs->image_1->delete();
        }

        if ($request->input('image_2', false)) {
            if (! $aboutUs->image_2 || $request->input('image_2') !== $aboutUs->image_2->file_name) {
                if ($aboutUs->image_2) {
                    $aboutUs->image_2->delete();
                }
                $aboutUs->addMedia(storage_path('tmp/uploads/' . basename($request->input('image_2'))))->toMediaCollection('image_2');
            }
        } elseif ($aboutUs->image_2) {
            $aboutUs->image_2->delete();
        }

        if ($request->input('image_3', false)) {
            if (! $aboutUs->image_3 || $request->input('image_3') !== $aboutUs->image_3->file_name) {
                if ($aboutUs->image_3) {
                    $aboutUs->image_3->delete();
                }
                $aboutUs->addMedia(storage_path('tmp/uploads/' . basename($request->input('image_3'))))->toMediaCollection('image_3');
            }
        } elseif ($aboutUs->image_3) {
            $aboutUs->image_3->delete();
        }

        if ($request->input('image_4', false)) {
            if (! $aboutUs->image_4 || $request->input('image_4') !== $aboutUs->image_4->file_name) {
                if ($aboutUs->image_4) {
                    $aboutUs->image_4->delete();
                }
                $aboutUs->addMedia(storage_path('tmp/uploads/' . basename($request->input('image_4'))))->toMediaCollection('image_4');
            }
        } elseif ($aboutUs->image_4) {
            $aboutUs->image_4->delete();
        }

        return (new AboutUsResource($aboutUs))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(AboutUs $aboutUs)
    {
        abort_if(Gate::denies('about_us_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $aboutUs->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
