<?php

namespace GPI\CoreBundle\Model\Calendar;

class Calendar
{
    public function time()
    {
        return time();
    }

    /**
     * @param $timestamp
     * @return \DateTime
     */
    public function dateTimeFromTimestamp($timestamp)
    {
        $dt = new \DateTime();
        $dt->setTimestamp($timestamp);
        return $dt;
    }

    /**
     * @return \DateTime
     */
    public function dateTimeNow()
    {
        return $this->dateTimeFromTimestamp($this->time());
    }


    public function dateTimeInNDays($daysFromNow)
    {
        $dateTimeNow = $this->dateTimeNow();
        $interval = \DateInterval::createFromDateString((int)$daysFromNow.' days');
        $futureDate = $dateTimeNow->add($interval);
        return $futureDate;
    }
}
