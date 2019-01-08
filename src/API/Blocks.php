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
 * This is the blocks resource class.
 *
 * @author Brian Faust <brian@ark.io>
 */
class Blocks extends AbstractAPI
{
    /**
     * Get all blocks.
     *
     * @param array $query
     *
     * @return array
     */
    public function all(array $query = []): array
    {
        return $this->get('blocks', $query);
    }

    /**
     * Get a block by the given id.
     *
     * @param string $id
     *
     * @return array
     */
    public function show(string $id): array
    {
        return $this->get("blocks/{$id}");
    }

    /**
     * Get all transactions by the given block.
     *
     * @param string $id
     * @param array  $query
     *
     * @return array
     */
    public function transactions(string $id, array $query = []): array
    {
        return $this->get("blocks/{$id}/transactions", $query);
    }

    /**
     * Filter all blocks by the given parameters.
     *
     * @param array $parameters
     *
     * @return array
     */
    public function search(array $parameters): array
    {
        return $this->post('blocks/search', $parameters);
    }
}
