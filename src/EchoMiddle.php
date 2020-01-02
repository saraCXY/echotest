<?php

namespace Middlelog\echotest;

use Closure;

class EchoMiddle
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
        return $next($request);
    }

    public function terminate(){
        echo 'terminate down';
    }
}
