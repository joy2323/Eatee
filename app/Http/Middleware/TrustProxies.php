<?php

namespace App\Http\Middleware;

use Illuminate\Http\Request;
use Fideloper\Proxy\TrustProxies as Middleware;
use Illuminate\Contracts\Config\Repository;


class TrustProxies extends Middleware
{
    /**
     * The trusted proxies for this application.
     *
     * @var array|string|null
     */

    protected $proxies;

    /**
     * The headers that should be used to detect proxies.
     *
     * @var int
     */

    // protected $headers = Request::HEADER_X_FORWARDED_ALL;
    protected $headers = null;

    public function __construct(Repository $config)
    {
        parent::__construct($config->get('trustedproxy.proxies'));

        $this->headers = $config->get('trustedproxy.headers');
    }

}
