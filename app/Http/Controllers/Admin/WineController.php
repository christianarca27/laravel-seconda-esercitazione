<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Wine;
use App\Models\Winery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class WineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $wines = Wine::all();

        return view('admin.wines.index', compact('wines'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $wineries = Winery::all();

        return view('admin.wines.create', compact('wineries'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $formData = $request->all();
        $this->validation($formData);

        $newWine = new Wine();

        $newWine->fill($formData);

        $newWine->save();

        return redirect()->route('admin.wines.show', $newWine);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Wine  $wine
     * @return \Illuminate\Http\Response
     */
    public function show(Wine $wine)
    {
        return view('admin.wines.show', compact('wine'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Wine  $wine
     * @return \Illuminate\Http\Response
     */
    public function edit(Wine $wine)
    {
        $wineries = Winery::all();

        return view('admin.wines.edit', compact('wine', 'wineries'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Wine  $wine
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Wine $wine)
    {
        $formData = $request->all();
        $this->validation($formData);

        $wine->update($formData);

        return redirect()->route('admin.wines.show', $wine);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Wine  $wine
     * @return \Illuminate\Http\Response
     */
    public function destroy(Wine $wine)
    {
        $wine->delete();

        return redirect()->route('admin.wines.index');
    }

    private function validation($formData)
    {
        $validator = Validator::make(
            $formData,
            [
                'nome' => 'required',
                'annata' => 'required',
                'cantina_id' => 'nullable|exists:wineries,id',
                'colore' => 'required',
                'tipologia' => 'required',
                'gradazione' => 'required',
                'estratto' => 'required',
                'acidita' => 'required'
            ],
            []
        )->validate();

        return $validator;
    }
}
