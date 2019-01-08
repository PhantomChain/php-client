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
 * This is the votes resource test class.
 *
 * @author Brian Faust <brian@ark.io>
 * @covers \PhantomChain\Client\API\Votes
 */
class VotesTest extends TestCase
{
    /** @test */
    public function all_calls_correct_url()
    {
        $this->assertResponse(2, 'GET', 'votes', function ($connection) {
            return $connection->votes()->all();
        });
    }

    /** @test */
    public function show_calls_correct_url()
    {
        $this->assertResponse(2, 'GET', 'votes/dummy', function ($connection) {
            return $connection->votes()->show('dummy');
        });
    }

    /**
     * @return string
     */
    protected function getApiClass()
    {
        return \PhantomChain\Client\API\Votes::class;
    }
}
