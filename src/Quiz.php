<?php

namespace App;


class Quiz
{
    protected array $questions;

    public function addQuestion(Question $question)
    {
        $this->questions[] = $question;
    }

    public function nextQuestion()
    {
        return $this->questions[0];
    }

    public function questions()
    {
        return $this->questions;
    }

    public function grade()
    {
        $correct = count($this->correctAnswers());

        return ($correct / count($this->questions)) * 100;
    }

    public function correctAnswers()
    {
        return array_filter(
            $this->questions,
            fn($question) => $question->solved()
        );
    }

}