<?php

namespace GPI\CoreBundle\Model\Auction;


class AuctionStatus
{
    const ACTIVE = 0;
    const CANCELED = 1;
    const DEACTIVATED = 2;

    private static $statusNames = array(
        self::ACTIVE => 'Aktywna',
        self::CANCELED => 'Usunięta',
        self::DEACTIVATED => 'Nieaktywna'
    );

    public function name($status)
    {
        return static::$statusNames[$status];
    }

    public function label($status)
    {
        return static::$statusLabels[$status];
    }

    private static $statusLabels =  array(
            self::ACTIVE => "label label-success",
            self::DEACTIVATED => "label label-yellow",
            self::CANCELED => "label label-danger"
        );

}
