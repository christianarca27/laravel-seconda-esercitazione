<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Vine;
use Illuminate\Http\Request;

class VineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vines = Vine::all();

        return view('admin.vines.index', compact('vines'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Vine  $vine
     * @return \Illuminate\Http\Response
     */
    public function show(Vine $vine)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Vine  $vine
     * @return \Illuminate\Http\Response
     */
    public function edit(Vine $vine)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Vine  $vine
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vine $vine)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Vine  $vine
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vine $vine)
    {
        //
    }
}
