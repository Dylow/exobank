<?php

declare(strict_types=1);

class DatabaseManager
{
	public static function DB()
	{
		// remplace le_nom_de_ta_base_de_données, ton_username, ton_password pour te connecter à ta base de données
		return new PDO('mysql:host=localhost:3306;dbname=le_nom_de_ta_base_de_données', 'ton_username', 'ton_password');
	}
}
