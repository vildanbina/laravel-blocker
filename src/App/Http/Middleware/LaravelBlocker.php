<?php

namespace bexvibi\LaravelBlocker\App\Http\Middleware;

use bexvibi\LaravelBlocker\App\Traits\LaravelCheckBlockedTrait;
use Closure;
use Illuminate\Http\Request;

class LaravelBlocker
{
    use LaravelCheckBlockedTrait;

    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param Closure $next
     *
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (settings('blockerAllowed')) {
            LaravelCheckBlockedTrait::checkBlocked();
        }

        return $next($request);
    }
}
