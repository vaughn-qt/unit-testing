<?php

namespace tests;

use App\Gateway;
use App\Subscription;
use App\User;
use PHPUnit\Framework\TestCase;

class SubscriptionTest extends TestCase
{
    /** @test */
    function it_creates_a_stripe_subscription()
    {
        $this->markTestSkipped();
    }

    /** @test */
     function subscribes_the_user()
    {
        $gateway = $this->createMock(Gateway::class);

        $gateway->method('create')->willReturn('receipt-stub');

        $subscription = ($gateway);
        $user = new User('John Doe');

        $subscription->create($user);

        $this->assertFalse($user-> isSubscribed());

    }

    /** @test */

    function it_delivers_a_reciept() {

        $subscription = new Subscription($this->createMock(Gateway::class));
    }
}



