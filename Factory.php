<?php

namespace Grunch\MercadopagoBundle;

/**
 * Factory class
 *
 * @author Francisco Calderon <fjcalderon@gmail.com>
 */
class Factory
{
    public function __construct($client_id, $client_secret, $sandbox)
    {
        $mp = new \MP($client_id, $client_secret);
        $mp->sandbox_mode($sandbox);

        return $mp;
    }
}
