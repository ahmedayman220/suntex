<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyAboutUsFeatureRequest;
use App\Http\Requests\StoreAboutUsFeatureRequest;
use App\Http\Requests\UpdateAboutUsFeatureRequest;
use App\Models\AboutUsFeature;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AboutUsFeaturesController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('about_us_feature_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $aboutUsFeatures = AboutUsFeature::all();

        return view('admin.aboutUsFeatures.index', compact('aboutUsFeatures'));
    }

    public function create()
    {
        abort_if(Gate::denies('about_us_feature_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.aboutUsFeatures.create');
    }

    public function store(StoreAboutUsFeatureRequest $request)
    {
        $aboutUsFeature = AboutUsFeature::create($request->all());

        return redirect()->route('admin.about-us-features.index');
    }

    public function edit(AboutUsFeature $aboutUsFeature)
    {
        abort_if(Gate::denies('about_us_feature_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.aboutUsFeatures.edit', compact('aboutUsFeature'));
    }

    public function update(UpdateAboutUsFeatureRequest $request, AboutUsFeature $aboutUsFeature)
    {
        $aboutUsFeature->update($request->all());

        return redirect()->route('admin.about-us-features.index');
    }

    public function show(AboutUsFeature $aboutUsFeature)
    {
        abort_if(Gate::denies('about_us_feature_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.aboutUsFeatures.show', compact('aboutUsFeature'));
    }

    public function destroy(AboutUsFeature $aboutUsFeature)
    {
        abort_if(Gate::denies('about_us_feature_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $aboutUsFeature->delete();

        return back();
    }

    public function massDestroy(MassDestroyAboutUsFeatureRequest $request)
    {
        $aboutUsFeatures = AboutUsFeature::find(request('ids'));

        foreach ($aboutUsFeatures as $aboutUsFeature) {
            $aboutUsFeature->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
