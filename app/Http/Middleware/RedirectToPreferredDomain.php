<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Redirect;
class RedirectToPreferredDomain
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        $url = $request->getScheme() . '://' . config('app.preferred_domain') . $request->getPathInfo();
        if ($request->getHost() !== config('app.preferred_domain')) {
            return Redirect::to($url, 301);
        }

        return $next($request);
    }
}
