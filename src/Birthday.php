<?php

namespace Demo;

class Birthday
{
    private $birthday;

    private $today;

    public function __construct()
    {
        $this->birthday = new DateTime('1991-07-30');
    }

    public function celebrate()
    {
        if ($this->today->format('m-d') === $this->birthday->format('m-d')) {
            return 'yes';
        } else {
            return 'no';
        }
    }

    public function getToday(): DateTime
    {
        return $this->today;
    }

    public function setToday(DateTime $today)
    {
        $this->today = $today;
    }
}