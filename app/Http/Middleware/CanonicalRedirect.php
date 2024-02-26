<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CanonicalRedirect
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        $url = $request->url();
        $canonicalUrl = $this->getCanonicalUrl($url);

        if ($url !== $canonicalUrl) {
            return Redirect::to($canonicalUrl, 301);
        }

        return $next($request);
    }

    private function getCanonicalUrl($url)
    {
        // Remove index.html or index.php from the URL
        return preg_replace('/\/(?:index(?:\.html|\.php)?)?$/i', '', $url);
    }
}
