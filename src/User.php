<?php

namespace App;

class User
{
    protected $name;
    protected $subscribed = false;
    public function __construct($name)
    {
        $this->name;
    }

    public function isSubscribed()
    {
        return $this->subscribed;
    }

    public function markAsSubscribed()
    {

        return $this->subscribed = true;
    }
}