<?php
/**
 * OperatorInterface
 * 
 * @date 10-3-2016
 * @desc 
 */

$person         = $_POST["person"];
$name           = $_POST["name"];
$street_address = $_POST["street_address"];
$city           = $_POST["city"];
$postalCode     = $_POST["postal_code"];
$email          = $_POST["email"];
$type           = $_POST["type"];
$member_status  = $_POST["status"];
$provider_type  = $_POST["type"];

if (strcmp($person, "member") === 0)
{
	$member = new MemberMaintainer();
}
else if (strcmp($person, "provider") === 0)
{
	$member = new ProviderMaintainer();
}

class OperatorInterface
{
	private $ui;

	function __construct()
	{
		//process input on members
		$this->ui = new UserInterface();

	}
	
	public function main ()
	{
		$this->ui->body .= $_POST["name"] . " " . $_POST["street_address"];

		$this->ui->bodyId = "operatorinterface";
		$this->ui->body .= Utils::getNavigationMenu();

		$this->ui->body .= "<form method='post' action=''>";
		//$this->ui->body .= (new Button("test button", "This is the test button"));
		$this->ui->body .= "</form>";
		echo $this->ui;
	}
}