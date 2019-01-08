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
 * This is the transactions resource class.
 *
 * @author Brian Faust <brian@ark.io>
 */
class Transactions extends AbstractAPI
{
    /**
     * Get all transactions.
     *
     * @param array $query
     *
     * @return array
     */
    public function all(array $query = []): array
    {
        return $this->get('transactions', $query);
    }

    /**
     * Create a new transaction.
     *
     * @param array $transactions
     *
     * @return array
     */
    public function create(array $transactions): array
    {
        return $this->post('transactions', compact('transactions'));
    }

    /**
     * Get a transaction by the given id.
     *
     * @param string $id
     *
     * @return array
     */
    public function show(string $id): array
    {
        return $this->get("transactions/{$id}");
    }

    /**
     * Get all unconfirmed transactions.
     *
     * @return array
     */
    public function allUnconfirmed(): array
    {
        return $this->get('transactions/unconfirmed');
    }

    /**
     * Get an unconfirmed transaction by the given id.
     *
     * @param string $id
     *
     * @return array
     */
    public function showUnconfirmed(string $id): array
    {
        return $this->get("transactions/unconfirmed/{$id}");
    }

    /**
     * Filter all transactions by the given parameters.
     *
     * @param array $parameters
     *
     * @return array
     */
    public function search(array $parameters): array
    {
        return $this->post('transactions/search', $parameters);
    }

    /**
     * Get a list of valid transaction types.
     *
     * @return array
     */
    public function types(): array
    {
        return $this->get('transactions/types');
    }
}
