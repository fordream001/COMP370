<?php
/**
 * Copyright (c) 2016. Farzin Dhanji, Karanvir Gill, Thomas Mclennan.
 */

/**
 * MemberReportGenerator
 * 
 * @date 10-3-2016
 * @desc 
 */
class MemberReportGenerator
{
	private $report;
	
	function __construct ()
	{
		$this->report = new MemberReport();
	}
	
	public function getReport ()
	{
		return $this->report->$this->__toString();
	}

	public function __toString()
	{
		return $this->getReport();
	}
}