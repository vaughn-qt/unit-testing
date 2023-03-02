<?php

namespace App;
use \App\Gateway;
class Subscription
{
    protected Gateway $gateway;

    /**
     * @param $gateway
     */
    public function __construct(Gateway $gateway)
    {
        $this->gateway = $gateway;
    }

    public function create(User $user)
    {
        $receipt = $this->gateway->create();

        $user->markAsSubscribed();

    }
}