<?php

// Ici votre code PHP permettant de traiter le formulaire, ses erreurs et l'envoie du mail.

?>
<!doctype html>
<html lang="fr"><head>
		<meta charset="UTF-8">
		<title>Contact</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
	<?php if(sizeof($errors) > 0) : ?>
	<div class="alert alert-success">
		<strong>Attention!</strong> Votre formulaire comporte des erreurs.
		<ul>
			<?php foreach($errors as $error) : ?>
			<li><?php echo $error; ?></li>
			<?php endforeach; ?>
		</ul>
	</div>
	<?php endif; ?>
	<form method="post">
		<div>
			<label for="nom">Nom :</label>
			<input type="text" id="nom" name="name"/>
		</div>
		<div>
			<label for="courriel">Courriel :</label>
			<input type="email" id="courriel" name="email" />
		</div>
		<div>
			<label for="message">Message :</label>
			<textarea id="message" name="message"></textarea>
		</div>
		<button type="submit" name="submit">Envoyer votre message</button>
	</form>
</body>
</html>
