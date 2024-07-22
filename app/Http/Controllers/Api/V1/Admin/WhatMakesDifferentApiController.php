<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreWhatMakesDifferentRequest;
use App\Http\Requests\UpdateWhatMakesDifferentRequest;
use App\Http\Resources\Admin\WhatMakesDifferentResource;
use App\Models\WhatMakesDifferent;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class WhatMakesDifferentApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('what_makes_different_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new WhatMakesDifferentResource(WhatMakesDifferent::all());
    }

    public function store(StoreWhatMakesDifferentRequest $request)
    {
        $whatMakesDifferent = WhatMakesDifferent::create($request->all());

        return (new WhatMakesDifferentResource($whatMakesDifferent))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(WhatMakesDifferent $whatMakesDifferent)
    {
        abort_if(Gate::denies('what_makes_different_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new WhatMakesDifferentResource($whatMakesDifferent);
    }

    public function update(UpdateWhatMakesDifferentRequest $request, WhatMakesDifferent $whatMakesDifferent)
    {
        $whatMakesDifferent->update($request->all());

        return (new WhatMakesDifferentResource($whatMakesDifferent))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(WhatMakesDifferent $whatMakesDifferent)
    {
        abort_if(Gate::denies('what_makes_different_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $whatMakesDifferent->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
