<!DOCTYPE html>
<?php
session_start();
require 'config/config.php';
?>
<html>
<head>
	<title>Soccraft</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/home.css">
</head>
<body>
<div class="menu">
	<ul>
		<li id="current"><a href="index.php">Acceuil</a></li>
		<li><a href="forum/">Forum</a></li>
		<li><a href="redirect.php?url=boutique">Boutique</a></li>
		<li id="butla"><a href="launcher.php?downloads=mediafiresrc">Téléchargement launcher </a></li>
	</ul>
</div>
<div class="content">
	<div class="banniere">
		<div class="left">
			<?php
			$bdo = $bdd->query("SELECT * FROM news LIMIT 2");
		while ($b = $bdo->fetch()) {
			echo "<div class='card'>"."<h2>".$b['title']."</h2>";
			echo "<p class='copa'>".$b['content']."</p>";
			echo "</div>";
		}
			?>
		</div>
		<div class="right">
			<a href="https://discord.gg/7Nu5nvv" title="serveur discord Soccraft">Discord</a>
			<br>
			<i>Nombre de joueurs de connecter : <?php echo $players; ?></i>
	</div>
</body>
</html>