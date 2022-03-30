# Exo compte bancaire

Base de données
- Créer une table account avec les champs:
  - id int(10) unsigned not null (primary key)
  - nom VARCHAR(255) NOT NULL
  - solde int(10) NOT NULL

Fonctionnalités attendues:
- Créer un nouveau compte (types de compte autorisés: Compte Courant, Livret A, PEL, Compte Joint)
- Ajouter/retirer de l'argent
- Si au minimum 2 comptes existent, afficher la fonctionnalité pour transférer de l'argent du compte A vers le compte B
- Supprimer un compte

Pour infos:
- Le HTML se trouve dans Views/accounts.php
- Le service Hydrator (Service/Hydrator) sert à créer un objet avec les données récupérées de la base
- La classe Account à créer dans Entity/Account.php
- Le controleur AccountController (Controller/AccountController.php) contient la logique (on récupère les données de la base, on les traite, et on les envoie à la vue pour les afficher)
- Les managers vont faire la connexion avec la base de données:
  - AccountManager (Manager/AccountManager.php) contient toutes les méthodes liées aux comptes (ajout d'un compte en base, suppression du compte, récupérer tous les comptes, etc.)
  - DatabaseManager (Manager/DatabaseManager.php) sert uniquement à se connecter à la base de données
