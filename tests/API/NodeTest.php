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
 * This is the node resource test class.
 *
 * @author Brian Faust <brian@ark.io>
 * @covers \PhantomChain\Client\API\Node
 */
class NodeTest extends TestCase
{
    /** @test */
    public function status_calls_correct_url()
    {
        $this->assertResponse(2, 'GET', 'node/status', function ($connection) {
            return $connection->node()->status();
        });
    }

    /** @test */
    public function syncing_calls_correct_url()
    {
        $this->assertResponse(2, 'GET', 'node/syncing', function ($connection) {
            return $connection->node()->syncing();
        });
    }

    /** @test */
    public function configuration_calls_correct_url()
    {
        $this->assertResponse(2, 'GET', 'node/configuration', function ($connection) {
            return $connection->node()->configuration();
        });
    }
}
