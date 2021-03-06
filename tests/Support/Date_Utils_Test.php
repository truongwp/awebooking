<?php

use AweBooking\Support\Date_Utils;

class Date_Utils_Test extends WP_UnitTestCase {
	function test_days_in_month() {
		$this->assertEquals(Date_Utils::days_in_month(1, 2017), 31);
		$this->assertEquals(Date_Utils::days_in_month(2, 2017), 28);

		$this->assertEquals(Date_Utils::days_in_month(2, 2018), 28);
		$this->assertEquals(Date_Utils::days_in_month(12, 2018), 31);
	}
}
