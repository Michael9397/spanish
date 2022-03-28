<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class SettingsController extends Controller
{

    public function index()
    {
        return Inertia::render('Settings');
    }

    public function update(Request $request)
    {
        $settings  = $request->validate([
            'form.ar' => 'required',
            'form.er' => 'required',
            'form.ir' => 'required',
        ]);

        $conjugateSelections = [
            'ar' => $settings['form']['ar'],
            'er' => $settings['form']['er'],
            'ir' => $settings['form']['ir'],
        ];
        
        $user = auth()->user();
        $user->settings = [
            'conjugateSelections' => $conjugateSelections,
        ];
        $user->save();

        return Inertia::render('Settings', [
            'form' => $conjugateSelections,
        ]);
    }
}
