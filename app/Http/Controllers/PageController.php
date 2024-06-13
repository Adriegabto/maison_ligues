<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function adminGestion()
    {
        return view('agestion');
    }


    public function confirm_membre()
    {
        return view('confirm_membre');
    }

    public function form()
    {
        return view('auth.form');
    }

    public function submitForm(Request $request)
    {
        // Valider et traiter les données du formulaire
        // ...

        return redirect('/')->with('success', 'Inscription réussie!');
    }

    public function membreUpdate()
    {
        return view('update');
    }

    public function valid()
    {
        return view('valid');
    }

    public function success()
    {
        return view('success');
    }
}
