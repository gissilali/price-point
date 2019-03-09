<?php

namespace App\Http\Controllers\API;

use App\Platform;
use App\Http\Controllers\Controller;
use App\Transformers\QuestionTransformer;

class QuestionController extends Controller
{
    public function index(Platform $platform)
    {
        return response()->json([
            'success' => true,
            'data' => fractal($platform->questions, new QuestionTransformer())
        ]);
    }
}
