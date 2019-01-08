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

use GuzzleHttp\Client;
use PhantomChain\Client\Connection;
use PhantomChain\Client\Http\Request;
use PhantomChain\Client\Contracts\API;

/**
 * This is the abstract resource class.
 *
 * @author Brian Faust <brian@ark.io>
 */
abstract class AbstractAPI
{
    /**
     * The client connection.
     *
     * @var \PhantomChain\Client\Connection
     */
    public $connection;

    /**
     * Create a new API class instance.
     *
     * @param \PhantomChain\Client\Connection $connection
     */
    public function __construct(Connection $connection)
    {
        $this->connection = $connection;
    }

    /**
     * Send a GET request with query parameters.
     *
     * @param string $path
     * @param array  $query
     *
     * @return array|string
     */
    protected function get(string $path, array $query = [])
    {
        $response = $this->connection->getHttpClient()->get($path, compact('query'));

        return json_decode($response->getBody()->getContents(), true);
    }

    /**
     * Send a POST request with JSON-encoded parameters.
     *
     * @param string $path
     * @param array  $parameters
     *
     * @return array|string
     */
    protected function post(string $path, array $parameters = [])
    {
        $response = $this->connection->getHttpClient()->post(
            $path,
            ['json' => $parameters]
        );

        return json_decode($response->getBody()->getContents(), true);
    }
}
