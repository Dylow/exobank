<?php

// inclure le header

?>

<div class="container">

	<header class="flex">
		<p class="margin-right">Bienvenue</p>
	</header>


	<?php
		// si message d'erreur existe
	?>
		<p class="error-message"> <?php // afficher message d'erreur ?></p>
	<?php
		//
	?>

	<h1>Mon application bancaire</h1>

	<form class="newAccount" action="../Controller/AccountController.php" method="post">
		<select class="" name="name" required>
			<option value="" disabled>Choisissez le type de compte à ouvrir</option>
			<?php // pour chaque type de compte disponible ?>
				<option value="<?php // afficher nom du compte ?>"><?php // afficher nom du compte ?></option>
			<?php // ?>
		</select>
		<input type="submit" name="new" value="Ouvrir un nouveau compte">
	</form>

	<hr>

	<div class="main-content flex">

	<?php
	// Pour chaque compte existant
	?>

		<div class="card-container">

			<div class="card">
				<h3><strong><?php // afficher le nom du compte ?></strong></h3>
				<div class="card-content">


					<p>Somme disponible : <?php // afficher la somme du compte ?> €</p>

					<h4>Dépot / Retrait</h4>
					<form action="../Controller/AccountController.php" method="post">
						<input type="hidden" name="id" value="<?php // afficher l'id du compte ?>"  required>
						<input type="number" name="balance" placeholder="Entrer une somme à débiter/créditer" required>
						<input type="submit" name="payment" value="Créditer">
						<input type="submit" name="debit" value="Débiter">
					</form>

					<?php
						// si il existe au moins 2 comptes
					?>

			 		<form action="../Controller/AccountController.php" method="post">

						<h4>Transfert</h4>
						<input type="number" name="balance" placeholder="somme à transférer"  required>
						<input type="hidden" name="idDebit" placeholder="Compte à débiter" value="<?php // afficher l'id du compte ?>" required>
						<select name="idPayment" required>
							<option value="" disabled>Choisir un compte</option>
							<?php
								// pour chaque compte
									// si l'id du compte est différent de celui en cours
							?>
							<option value="<?php // afficher l'id du compte ?>" ><?php // afficher le nom du compte ?></option>
							<?php
									//
								//
					 		?>
						</select>
						<input type="submit" name="transfer" value="Transférer l'argent">
					</form>

					<?php
						//
			 		?>

			 		<form class="delete" action="../Controller/AccountController.php" method="post">
				 		<input type="hidden" name="id" value="<?php // afficher l'id du compte ?>"  required>
				 		<input type="submit" name="delete" value="Supprimer le compte">
			 		</form>

				</div>
			</div>
		</div>

		<?php
			//
		?>
	</div>

</div>

<?php

// inclure le footer

 ?>
