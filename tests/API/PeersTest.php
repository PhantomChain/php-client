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

namespace PhantomChain\Tests\Client\API;

use PhantomChain\Tests\Client\TestCase;

/**
 * This is the peers resource test class.
 *
 * @author Brian Faust <brian@ark.io>
 * @covers \PhantomChain\Client\API\Peers
 */
class PeersTest extends TestCase
{
    /** @test */
    public function all_calls_correct_url()
    {
        $this->assertResponse(2, 'GET', 'peers', function ($connection) {
            return $connection->peers()->all();
        });
    }

    /** @test */
    public function show_calls_correct_url()
    {
        $this->assertResponse(2, 'GET', 'peers/dummy', function ($connection) {
            return $connection->peers()->show('dummy');
        });
    }
}
