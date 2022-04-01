<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreConjugateRequest;
use App\Http\Requests\UpdateConjugateRequest;
use App\Models\Conjugate;
use App\Models\ConjugateList;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ConjugateController extends Controller
{

    /**
     * @return \Inertia\Response
     */
    public function single()
    {
        return Inertia::render('Conjugate', ['conjugates' => Conjugate::orderBy('infinitive')->get()]);
    }


    /**
     * @return \Inertia\Response
     */
    public function multiple()
    {
        return Inertia::render('ConjugateMultiple', ['conjugates' => $this->getConjugateList()]);
    }

    public function list(Request $request, $listSlug)
    {
        $list = ConjugateList::where('slug', $listSlug)->firstOrFail();
        $conjugates = Conjugate::whereIn('infinitive', $list->conjugate_list)->orderBy('infinitive')->get();
        return Inertia::render('ConjugateMultiple', [
            'conjugates' => $conjugates,
            'listName' => $list->name,
        ]);
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

    private function getConjugateList()
    {
        $conjugates = [$this->getArVerb(), $this->getErVerb(), $this->getIrVerb(), ...$this->getIrregularVerbs()];
        return Conjugate::whereIn('infinitive', $conjugates)->get()
            ->sortBy(function ($conjugate) use ($conjugates) {
                return array_search($conjugate->infinitive, $conjugates);
            })->values();
    }

    private function getArVerb() {
        $settings = auth()->user()->settings['conjugateSelections'] ?? [];
        if (empty($settings['ar'])) {
            return 'hablar';
        }

        if ($settings['ar'] === 'random') {
            $arVerbs = ['ayudar', 'hablar', 'mirar', 'escuchar'];
            $randKey = array_rand($arVerbs);

            return $arVerbs[$randKey];
        }

        return $settings['ar'];
    }

    private function getErVerb() {
        $settings = auth()->user()->settings['conjugateSelections'] ?? [];
        if (empty($settings['er'])) {
            return 'comer';
        }

        if ($settings['er'] === 'random') {
            $erVerbs = ['comer', 'aprender', 'deber', 'vender'];
            $randKey = array_rand($erVerbs);
            return $erVerbs[$randKey];
        }

        return $settings['er'];
    }

    private function getIrVerb() {
        $settings = auth()->user()->settings['conjugateSelections'] ?? [];
        if (empty($settings['ir'])) {
            return 'subir';
        }

        if ($settings['ir'] === 'random') {
            $irVerbs = ['vivir','permitir','recibir','abrir'];
            $randKey = array_rand($irVerbs);
            return $irVerbs[$randKey];
        }

        return $settings['ir'];
    }

    private function getIrregularVerbs() {
        return ['tener', 'poder', 'querer', 'ser', 'estar', 'decir', 'ir', 'hacer', 'ver', 'dar'];
    }



}
