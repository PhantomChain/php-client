<?php

declare(strict_types=1);

/*
 * This file is part of PHANTOM PHP Client.
 *
 * (c) PHANTOM <info@phantom.org>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PhantomChain\Client\API;

/**
 * This is the peers resource class.
 *
 * @author Brian Faust <brian@ark.io>
 */
class Peers extends AbstractAPI
{
    /**
     * Get all peers.
     *
     * @param array $query
     *
     * @return array
     */
    public function all(array $query = []): array
    {
        return $this->get('peers', $query);
    }

    /**
     * Get a peer by the given IP address.
     *
     * @param string $ip
     *
     * @return array
     */
    public function show(string $ip): array
    {
        return $this->get("peers/{$ip}");
    }
}
