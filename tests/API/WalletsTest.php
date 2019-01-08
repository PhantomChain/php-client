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
 * This is the wallets resource test class.
 *
 * @author Brian Faust <brian@ark.io>
 * @covers \PhantomChain\Client\API\Wallets
 */
class WalletsTest extends TestCase
{
    /** @test */
    public function all_calls_correct_url()
    {
        $this->assertResponse(2, 'GET', 'wallets', function ($connection) {
            return $connection->wallets()->all();
        });
    }

    /** @test */
    public function top_calls_correct_url()
    {
        $this->assertResponse(2, 'GET', 'wallets/top', function ($connection) {
            return $connection->wallets()->top();
        });
    }

    /** @test */
    public function show_calls_correct_url()
    {
        $this->assertResponse(2, 'GET', 'wallets/dummy', function ($connection) {
            return $connection->wallets()->show('dummy');
        });
    }

    /** @test */
    public function transactions_calls_correct_url()
    {
        $this->assertResponse(2, 'GET', 'wallets/dummy/transactions', function ($connection) {
            return $connection->wallets()->transactions('dummy');
        });
    }

    /** @test */
    public function sent_transactions_calls_correct_url()
    {
        $this->assertResponse(2, 'GET', 'wallets/dummy/transactions/sent', function ($connection) {
            return $connection->wallets()->sentTransactions('dummy');
        });
    }

    /** @test */
    public function received_transactions_calls_correct_url()
    {
        $this->assertResponse(2, 'GET', 'wallets/dummy/transactions/received', function ($connection) {
            return $connection->wallets()->receivedTransactions('dummy');
        });
    }

    /** @test */
    public function votes_calls_correct_url()
    {
        $this->assertResponse(2, 'GET', 'wallets/dummy/votes', function ($connection) {
            return $connection->wallets()->votes('dummy');
        });
    }

    /** @test */
    public function search_calls_correct_url()
    {
        $this->assertResponse(2, 'POST', 'wallets/search', function ($connection) {
            return $connection->wallets()->search(['address' => 'dummy']);
        });
    }

    /**
     * @return string
     */
    protected function getApiClass()
    {
        return \PhantomChain\Client\API\Wallets::class;
    }
}
