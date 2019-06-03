<?php

namespace SongBai\Cors;

use Closure;

class  CorsMiddleware
{
    public function handle($request, Closure $next)
    {

        $response = $next($request);
//        $allow_origin = config('cors.allow_origin');
        $response->header('Access-Control-Allow-Origin', "*");
        $response->header('Access-Control-Allow-Headers', 'Origin, Content-Type, Cookie, X-CSRF-TOKEN, Accept, Authorization, X-XSRF-TOKEN');
        $response->header('Access-Control-Expose-Headers', 'Authorization, authenticated');
        $response->header('Access-Control-Allow-Methods', 'GET, POST, PATCH, PUT, OPTIONS');
        $response->header('Access-Control-Allow-Credentials', 'true');

        return $response;
    }
}