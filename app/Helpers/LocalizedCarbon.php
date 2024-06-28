<?php

namespace App\Helpers;

use Carbon\Carbon;

class LocalizedCarbon extends Carbon
{
    public function toLocalDateTime(): self
    {
        if (!empty($_COOKIE['tz_offset'])) {

            $timezoneOffset = $_COOKIE['tz_offset'];
            $minutesOffset = -1 * $timezoneOffset;

            $this->setTimezone(new \DateTimeZone('UTC'));

            $this->addMinutes($minutesOffset);
        }

        return $this;
    }
}
