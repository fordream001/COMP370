<?php

/**
 * Created by PhpStorm.
 * User: Thomas
 * Date: 3/11/16
 * Time: 4:13
 */
class ProviderInterface
{
	private $theProvider;#Provider
	private $theMember;#Member
	private $ui;#UserInterface

	function __construct()
	{
		$this->theProvider = new Provider();
		$this->theMember = new Member();
		$this->ui = new UserInterface();
	}

	public function logon()
	{

	}

	public function verifyMember()
	{

	}

	public function recieveDirectory()
	{

	}

	public function main()
	{
		echo Utils::getNavigationMenu();
	}

} 