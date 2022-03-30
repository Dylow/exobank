<?php

declare(strict_types=1);

require("../Service/Hydrator.php");

class Account
{
	use Hydrator;

	public function __construct(array $array)
	{
		$this->hydrate($array);
	}
}
