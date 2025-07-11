<?php

namespace App\Http\Middleware;

use Illuminate\Http\Middleware\TrustHosts as Middleware;

class TrustHosts extends Middleware
{
    /**
     * Get the host patterns that should be trusted.
     *
     * @return array
     */
    public function hosts()
    {
        return [
            $this->allSubdomainsOfApplicationUrl(),
            'https://gestiondpedidos.web.app/',
            'https://gestiondpedidos.firebaseapp.com/',
            'localhost'
        ];
    }
}
