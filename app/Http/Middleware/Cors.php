<?php namespace App\Http\Middleware;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class Cors {
    public function handle($request, \Closure $next)
    {
        if ($request->getMethod() === Request::METHOD_OPTIONS) {
            return response(['OK'], Response::HTTP_OK, $this->getHeaders());
        }

        $response = $next($request);

        $response->headers->add($this->getHeaders());

        return $response;
    }

    private function getHeaders() {
        return [
            'Access-Control-Allow-Origin'      => env('CORS_URL'),
            'Access-Control-Allow-Methods'     => 'OPTIONS, POST, GET, PUT, DELETE',
            'Access-Control-Allow-Headers'     => 'Origin, Content-Type, Authorization',
            'Cache-Control'                    => 'max-age=0, must-revalidate, private',
            'X-Content-Type-Options'           => 'nosniff',
        ];
    }
}
