<?php

/*
 * This file is part of the Active Collab DateValue project.
 *
 * (c) A51 doo <info@activecollab.com>. All rights reserved.
 */

namespace ActiveCollab\DateValue\Test;

use ActiveCollab\DateValue\DateTimeValue;
use ActiveCollab\DateValue\DateValue;
use ActiveCollab\DateValue\Test\TestCase\TestCase;
use DateTime;

/**
 * @package ActiveCollab\DateValue\Test
 */
class DateTimeValueFromDateTimeTest extends TestCase
{
    /**
     * Test date value from DateTime instance.
     */
    public function testDateValueFromDateTime()
    {
        $this->assertEquals('2016-02-02 00:00:00', (new DateValue(new DateTime('2016-02-02 13:14:15')))->format('Y-m-d H:i:s'));
    }

    /**
     * Test date time value from DateTime instance.
     */
    public function testDateTimeValueFromDateTime()
    {
        $this->assertEquals('2016-02-02 13:14:15', (new DateTimeValue(new DateTime('2016-02-02 13:14:15')))->format('Y-m-d H:i:s'));
    }
}
