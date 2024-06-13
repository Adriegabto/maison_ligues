<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ClientController extends Controller
{
    // Affiche le formulaire de login
    public function showLoginForm()
    {
        return view('auth.login');
    }

    // Traitement du login
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->route('success');
        } else {
            return back()->withErrors(['message' => 'Invalid credentials.']);
        }
    }

    public function showSuccess()
    {
        $client = Auth::user();
        if (!$client) {
            return redirect()->route('login')->withErrors(['message' => 'Vous devez être connecté pour accéder à cette page.']);
        }
        return view('success', compact('client'));
    }

    // Affiche le formulaire d'inscription
    public function showRegistrationForm()
    {
        return view('form');
    }

    // Traitement de l'inscription
    public function register(Request $request)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'age' => 'required|integer',
            'ville' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:clients',
            'password' => 'required|string|min:8',
        ]);

        $client = Client::create([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'age' => $request->age,
            'ville' => $request->ville,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        if ($request->hasFile('photo')) {
            $imageName = time() . '.' . $request->photo->extension();
            $request->photo->move(public_path('images'), $imageName);
            $client->image = $imageName;
            $client->save();
        }

        return redirect()->route('login')->with('success', 'Registration successful. Please login.');
    }
}