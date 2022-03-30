<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class SettingsController extends Controller
{

    public function index()
    {
        return Inertia::render('Settings', [
            'conjugateForms' => auth()->user()->settings['conjugateSelections'] ?? [
                    'ar' => 'hablar',
                    'er' => 'comer',
                    'ir' => 'subir',
                ],
            'includeVosotros' => auth()->user()->settings['includeVosotros'] ?? false,
        ]);
    }

    public function update(Request $request)
    {
        $settings  = $request->validate([
            'conjugateForms.ar' => 'required',
            'conjugateForms.er' => 'required',
            'conjugateForms.ir' => 'required',
            'includeVosotros' => 'required|boolean',
        ]);

        $conjugateSelections = [
            'ar' => $settings['conjugateForms']['ar'],
            'er' => $settings['conjugateForms']['er'],
            'ir' => $settings['conjugateForms']['ir'],
        ];

        $user = auth()->user();
        $user->settings = [
            'conjugateSelections' => $conjugateSelections,
            'includeVosotros' => $settings['includeVosotros'],
        ];
        $user->save();

        return Inertia::render('Settings', [
            'conjugateForms' => $conjugateSelections,
        ])->with('flash.success', 'Settings saved successfully.');
    }
}
