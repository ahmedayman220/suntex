<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyAboutUsSectionRequest;
use App\Http\Requests\StoreAboutUsSectionRequest;
use App\Http\Requests\UpdateAboutUsSectionRequest;
use App\Models\AboutUsSection;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;

class AboutUsSectionController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('about_us_section_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $aboutUsSections = AboutUsSection::with(['media'])->get();

        return view('admin.aboutUsSections.index', compact('aboutUsSections'));
    }

    public function create()
    {
        abort_if(Gate::denies('about_us_section_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.aboutUsSections.create');
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

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $aboutUsSection->id]);
        }

        return redirect()->route('admin.about-us-sections.index');
    }

    public function edit(AboutUsSection $aboutUsSection)
    {
        abort_if(Gate::denies('about_us_section_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.aboutUsSections.edit', compact('aboutUsSection'));
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

        return redirect()->route('admin.about-us-sections.index');
    }

    public function show(AboutUsSection $aboutUsSection)
    {
        abort_if(Gate::denies('about_us_section_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.aboutUsSections.show', compact('aboutUsSection'));
    }

    public function destroy(AboutUsSection $aboutUsSection)
    {
        abort_if(Gate::denies('about_us_section_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $aboutUsSection->delete();

        return back();
    }

    public function massDestroy(MassDestroyAboutUsSectionRequest $request)
    {
        $aboutUsSections = AboutUsSection::find(request('ids'));

        foreach ($aboutUsSections as $aboutUsSection) {
            $aboutUsSection->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('about_us_section_create') && Gate::denies('about_us_section_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new AboutUsSection();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}
