<!DOCTYPE html>
<html>
<head>
	<title>MADLIPS</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<h1>MAD LIPS</h1>
<nav>
	<ul>
		<li><a href="paniek.php">Er heerst paniek...</a></li>
		<li><a href="omkunde.php">Omkunde</a></li>
	</ul>
</nav>
<main>
	<h2>Omkunde</h2>
	<p>Er zijn veel mensen die niet kunnen <?php echo $_POST["able"]; ?>. Neem nou <?php echo $_POST["person"]; ?>. Zelfs met de hulp van een<?php echo $_POST["item"]; ?> of zelfs <?php echo $_POST["number"]; ?> kan <?php echo $_POST["person"]; ?> niet <?php echo $_POST["able"]; ?>. Dat heeft niet te maken met een gebrek aan <?php echo $_POST["personal"]; ?>, maar met een teveel aan <?php echo $_POST["bpersonal"]; ?> Te veel <?php echo $_POST["bpersonal"]; ?> Leidt tot <?php echo $_POST["worst"]; ?> en dat is niet goed als je wilt <?php echo $_POST["able"]; ?>. Helaas voor <?php echo $_POST["person"]; ?></p>
</main>
</body>
</html>