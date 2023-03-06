<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Contracts\Config\Repository;
use Fideloper\Proxy\TrustProxies as Middleware;


class TrustProxies extends Middleware
{
    use Closure;

     /**
     * The configuration repository instance.
     *
     * @var \Illuminate\Contracts\Config\Repository
     */
    protected $config;

    /**
     * Create a new trusted proxies middleware instance.
     *
     * @param  \Illuminate\Contracts\Config\Repository  $config
     * @return void
     */
    public function __construct(Repository $config)
    {
        $this->config = $config;
    }

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $this->app->set('request', $request);
    
        return $next($request);
    }
    

    /**
     * The trusted proxies for this application.
     *
     * @var array|string|null
     */

    // protected $proxies;

    /**
     * The headers that should be used to detect proxies.
     *
     * @var int
     */

    // protected $headers = Request::HEADER_X_FORWARDED_ALL;
    // protected $headers = null;

    // public function __construct(Repository $config)
    // {
    //     parent::__construct($config->get('trustedproxy.proxies'));

    //     $this->headers = $config->get('trustedproxy.headers');
    // }

}
