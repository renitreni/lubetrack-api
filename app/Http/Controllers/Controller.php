<?php

namespace App\Http\Controllers;

abstract class Controller
{
    public function ok($json = [], $code = 200)
    {
        return response()->json($json, $code);
    }

    public function error($json = [], $code = 500)
    {
        return response()->json($json, $code);
    }
}
