<?php

namespace GPI\CoreBundle\Model\Calendar;

class Calendar
{
    public function time()
    {
        return time();
    }

    public function dateTimeFromTimestamp($timestamp)
    {
        $dt = new \DateTime();
        $dt->setTimestamp($timestamp);
        return $dt;
    }

    public function dateTimeNow()
    {
        return $this->dateTimeFromTimestamp($this->time());
    }
}
