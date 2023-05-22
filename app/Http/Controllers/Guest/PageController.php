<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Wine;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('guest.home');
    }

    public function wines()
    {
        $wines = Wine::all();

        return view('guest.wines.index', compact('wines'));
    }

    public function show(Wine $wine)
    {
        return view('guest.wines.show', compact('wine'));
    }
}
