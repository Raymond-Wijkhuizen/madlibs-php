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
	<h2> Er heerst paniek...</h2>
	<p>Er heerst paniek in het koninkrijk <?php echo $_POST["country"]; ?>. Koning Egmond is ten einde raad en als koning Egmond ten einde raad is, dan roept hij zijn ten-einde-raadsheer <?php echo $_POST["person"]; ?>.</p>
	<p>"<?php echo $_POST["person"]; ?>! Het is een ramp! Het is een schande!"</p>
	<p>"Sire, Majesteit, Uwe Luidruchtigheid, wat is er aan de hand?"</p>
	<p>"Mijn <?php echo $_POST["animal"]; ?> is verdwenen! Zo maar, zonder waarschuwing. En ik had net <?php echo $_POST["toys"]; ?> voor hem gekocht"</p>
	<p>"Majesteit, uw <?php echo $_POST["animal"]; ?> komt vast vanzelf weer terug?"</p>
	<p>"Ja, da's leuk en aardig, maar hoe moet ik in de tussentijd <?php echo $_POST["hobby"]; ?> leren"</p>
	<p>"Maar Sire, daar kunt u toch uw <?php echo $_POST["money"]; ?> voor gebruiken"</p>
	<p>"<?php echo $_POST["person"]; ?>, Je hebt helemaal gelijk! Wat zou ik doen als ik jou niet had."</p>
	<p>"<?php echo $_POST["bored"]; ?>, Sire."</p>
</main>
</body>
</html>