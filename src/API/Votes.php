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
 * This is the votes resource class.
 *
 * @author Brian Faust <brian@ark.io>
 */
class Votes extends AbstractAPI
{
    /**
     * Get all votes.
     *
     * @param array $query
     *
     * @return array
     */
    public function all(array $query = []): array
    {
        return $this->get('votes', $query);
    }

    /**
     * Get a vote by the given id.
     *
     * @param string $id
     *
     * @return array
     */
    public function show(string $id): array
    {
        return $this->get("votes/{$id}");
    }
}
