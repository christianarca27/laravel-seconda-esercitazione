<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Wine;
use Illuminate\Http\Request;

class WineController extends Controller
{
    public function index()
    {
        $wines = Wine::all();

        return response()->json([
            'success' => true,
            'results' => $wines,
        ]);
    }

    public function show($id)
    {
        $wine = Wine::where('id', $id)->first();

        if ($wine) {
            return response()->json([
                'success' => true,
                'result' => $wine,
            ]);
        } else {
            return response()->json([
                'success' => false,
                'error' => 'Non bevi bello',
            ]);
        }
    }
}
