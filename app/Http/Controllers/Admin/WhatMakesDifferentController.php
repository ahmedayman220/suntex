<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyWhatMakesDifferentRequest;
use App\Http\Requests\StoreWhatMakesDifferentRequest;
use App\Http\Requests\UpdateWhatMakesDifferentRequest;
use App\Models\WhatMakesDifferent;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class WhatMakesDifferentController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('what_makes_different_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $whatMakesDifferents = WhatMakesDifferent::all();

        return view('admin.whatMakesDifferents.index', compact('whatMakesDifferents'));
    }

    public function create()
    {
        abort_if(Gate::denies('what_makes_different_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.whatMakesDifferents.create');
    }

    public function store(StoreWhatMakesDifferentRequest $request)
    {
        $whatMakesDifferent = WhatMakesDifferent::create($request->all());

        return redirect()->route('admin.what-makes-differents.index');
    }

    public function edit(WhatMakesDifferent $whatMakesDifferent)
    {
        abort_if(Gate::denies('what_makes_different_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.whatMakesDifferents.edit', compact('whatMakesDifferent'));
    }

    public function update(UpdateWhatMakesDifferentRequest $request, WhatMakesDifferent $whatMakesDifferent)
    {
        $whatMakesDifferent->update($request->all());

        return redirect()->route('admin.what-makes-differents.index');
    }

    public function show(WhatMakesDifferent $whatMakesDifferent)
    {
        abort_if(Gate::denies('what_makes_different_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.whatMakesDifferents.show', compact('whatMakesDifferent'));
    }

    public function destroy(WhatMakesDifferent $whatMakesDifferent)
    {
        abort_if(Gate::denies('what_makes_different_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $whatMakesDifferent->delete();

        return back();
    }

    public function massDestroy(MassDestroyWhatMakesDifferentRequest $request)
    {
        $whatMakesDifferents = WhatMakesDifferent::find(request('ids'));

        foreach ($whatMakesDifferents as $whatMakesDifferent) {
            $whatMakesDifferent->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
