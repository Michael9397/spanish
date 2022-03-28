<?php

namespace App\Http\Controllers;

use App\Models\Conjugate;
use Illuminate\Http\Request;
use Inertia\Inertia;

class GuestConjugateController extends Controller
{
    public function single()
    {
        return Inertia::render('GuestPractice/Conjugate', ['conjugates' => Conjugate::where('id', '<=', 13)->get()]);
    }


    /**
     * @return \Inertia\Response
     */
    public function multiple()
    {
        return Inertia::render('GuestPractice/ConjugateMultiple', ['conjugates' => Conjugate::where('id', '<=', 13)->get()]);
    }
}
