<?php

namespace Middlelog\echotest;

use Illuminate\Contracts\Http\Kernel;

use Illuminate\Support\ServiceProvider;

class EchoProviderServer extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
            $this->app[Kernel::class]->pushMiddleware(EchoMiddle::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
