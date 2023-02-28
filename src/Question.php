<?php

namespace App;

class Question
{
    protected $answer;
    protected $correct;

    public function __construct($body, $solution)
    {
        $this->body = $body;
        $this->solution = $solution;
    }

    public function submitAnswer($answer)
    {
        $this->answer = $answer;


        return $this->correct = $answer === $this->solution;
    }

    public function solved()
    {
        return $this->correct;
    }
}