<?php

declare(strict_types=1);

require("DatabaseManager.php");

/**
 *  Classe permettant de gérer les opérations en base de données concernant les objets Account
 */
class AccountManager
{
	/** @var PDO */
	private $db;

	public function __construct()
	{
		$this->setDb(DatabaseManager::DB());
	}

	public function setDb(PDO $database): void
	{
		$this->db = $database;
	}
}
