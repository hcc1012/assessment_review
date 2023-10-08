<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Role
{
    public function handle(Request $request, Closure $next, $roleID)
    {
        if (!$request->user()->roles->contains('id', $roleID)) {
            return redirect('dashboard');
        }
        return $next($request);
    }
}

