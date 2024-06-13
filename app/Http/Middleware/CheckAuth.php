<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class CheckAuth
{
    public function handle($request, Closure $next)
    {
        Log::info('CheckAuth middleware triggered.');

        if (!Auth::check()) {
            Log::warning('User not authenticated.');
            return redirect()->route('login')->withErrors(['message' => 'Vous devez être connecté pour accéder à cette page.']);
        }

        Log::info('User authenticated.');
        return $next($request);
    }
}