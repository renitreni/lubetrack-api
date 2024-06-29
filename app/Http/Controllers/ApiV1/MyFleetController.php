<?php

namespace App\Http\Controllers\ApiV1;

use App\Http\Controllers\Controller;
use App\Http\Resources\ApiV1\MyFleetResource;
use Illuminate\Http\Request;

class MyFleetController extends Controller
{
    public function index(Request $request)
    {
        return MyFleetResource::collection($request->user()->fleets);
    }
}
