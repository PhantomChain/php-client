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
 * This is the blocks resource test class.
 *
 * @author Brian Faust <brian@ark.io>
 * @covers \PhantomChain\Client\API\Blocks
 */
class BlocksTest extends TestCase
{
    /** @test */
    public function all_calls_correct_url()
    {
        $this->assertResponse(2, 'GET', 'blocks', function ($connection) {
            return $connection->blocks()->all();
        });
    }

    /** @test */
    public function show_calls_correct_url()
    {
        $this->assertResponse(2, 'GET', 'blocks/dummy', function ($connection) {
            return $connection->blocks()->show('dummy');
        });
    }

    /** @test */
    public function transactions_calls_correct_url()
    {
        $this->assertResponse(2, 'GET', 'blocks/dummy/transactions', function ($connection) {
            return $connection->blocks()->transactions('dummy');
        });
    }

    /** @test */
    public function search_calls_correct_url()
    {
        $this->assertResponse(2, 'POST', 'blocks/search', function ($connection) {
            return $connection->blocks()->search(['address' => 'dummy']);
        });
    }
}
