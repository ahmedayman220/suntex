<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSubscribeRequest;
use App\Http\Requests\UpdateSubscribeRequest;
use App\Http\Resources\Admin\SubscribeResource;
use App\Models\Subscribe;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SubscribeApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('subscribe_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new SubscribeResource(Subscribe::all());
    }

    public function store(StoreSubscribeRequest $request)
    {
        $subscribe = Subscribe::create($request->all());

        return (new SubscribeResource($subscribe))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(Subscribe $subscribe)
    {
        abort_if(Gate::denies('subscribe_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new SubscribeResource($subscribe);
    }

    public function update(UpdateSubscribeRequest $request, Subscribe $subscribe)
    {
        $subscribe->update($request->all());

        return (new SubscribeResource($subscribe))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(Subscribe $subscribe)
    {
        abort_if(Gate::denies('subscribe_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $subscribe->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
