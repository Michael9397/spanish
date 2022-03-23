<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreConjugateRequest;
use App\Http\Requests\UpdateConjugateRequest;
use App\Models\Conjugate;
use Inertia\Inertia;

class ConjugateController extends Controller
{

    /**
     * @return \Inertia\Response
     */
    public function single()
    {
        return Inertia::render('Conjugate', ['conjugates' => Conjugate::all()]);
    }


    /**
     * @return \Inertia\Response
     */
    public function multiple()
    {
        return Inertia::render('ConjugateMultiple', ['conjugates' => Conjugate::all()]);
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
     * @param  \App\Http\Requests\StoreConjugateRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreConjugateRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Conjugate  $conjugate
     * @return \Illuminate\Http\Response
     */
    public function show(Conjugate $conjugate)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Conjugate  $conjugate
     * @return \Illuminate\Http\Response
     */
    public function edit(Conjugate $conjugate)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateConjugateRequest  $request
     * @param  \App\Models\Conjugate  $conjugate
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateConjugateRequest $request, Conjugate $conjugate)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Conjugate  $conjugate
     * @return \Illuminate\Http\Response
     */
    public function destroy(Conjugate $conjugate)
    {
        //
    }
}
