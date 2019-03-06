<?php

namespace App\Http\Controllers\API;

use App\Platform;
use App\Transformers\PlatformTransformer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PlatformController extends Controller
{
    public function index()
    {
        return response()->json([
            'success' => true,
            'data' => fractal(Platform::orderBy('name')->get(), new PlatformTransformer())
        ]);
    }

    public function store()
    {

    }
}
