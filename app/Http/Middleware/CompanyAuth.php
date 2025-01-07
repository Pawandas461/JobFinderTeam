<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CompanyAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        // Check if a company session exists
        if (!session()->has('company_id')) {
            // Redirect to login if not authenticated
            return redirect('/company/login')->with('error', 'Please login to access this page.');
        }

        // Allow request to proceed
        return $next($request);
    }
}
