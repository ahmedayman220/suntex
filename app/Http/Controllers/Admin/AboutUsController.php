<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyAboutUsRequest;
use App\Http\Requests\StoreAboutUsRequest;
use App\Http\Requests\UpdateAboutUsRequest;
use App\Models\AboutUs;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;

class AboutUsController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('about_us_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $aboutUss = AboutUs::with(['media'])->get();

        return view('admin.aboutUss.index', compact('aboutUss'));
    }

    public function create()
    {
        abort_if(Gate::denies('about_us_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.aboutUss.create');
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

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $aboutUs->id]);
        }

        return redirect()->route('admin.about-uss.index');
    }

    public function edit(AboutUs $aboutUs)
    {
        abort_if(Gate::denies('about_us_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.aboutUss.edit', compact('aboutUs'));
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

        return redirect()->route('admin.about-uss.index');
    }

    public function show(AboutUs $aboutUs)
    {
        abort_if(Gate::denies('about_us_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.aboutUss.show', compact('aboutUs'));
    }

    public function destroy(AboutUs $aboutUs)
    {
        abort_if(Gate::denies('about_us_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $aboutUs->delete();

        return back();
    }

    public function massDestroy(MassDestroyAboutUsRequest $request)
    {
        $aboutUss = AboutUs::find(request('ids'));

        foreach ($aboutUss as $aboutUs) {
            $aboutUs->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('about_us_create') && Gate::denies('about_us_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new AboutUs();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}
