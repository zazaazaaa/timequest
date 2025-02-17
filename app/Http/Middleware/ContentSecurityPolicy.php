<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ContentSecurityPolicy
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $response = $next($request);

        $csp = "default-src 'self'; ";
        $csp .= "script-src 'self' https://cdn.ckeditor.com; ";  
        $csp .= "style-src 'self' https://fonts.googleapis.com https://cdnjs.cloudflare.com; ";
        $csp .= "font-src 'self' https://fonts.gstatic.com https://cdnjs.cloudflare.com data:; ";
        $csp .= "img-src 'self' data:; ";
        $csp .= "connect-src https://proxy-event.ckeditor.com https://*.ckeditor.com; ";
        $csp .= "frame-ancestors 'none'; ";        

        $response->headers->set('Content-Security-Policy', $csp);

        return $response;
    }
}

