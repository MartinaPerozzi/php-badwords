<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- TITLE -->
	<title>Bad Words</title>
	<!-- LINK -->
</head>

<body>
		<div class="container">
            <h3>Scrivi il tuo testo</h3>
            <form action="./badwords.php" method="GET">
                <label for="your-text"></label>
                <input id="your-text" type="textarea" name="your-text">
                <h3>Scrivi la brutta parola</h3>
                <input id="your-badword" type="textarea" name="your-badword">
                <button>Invia</button>
            </form>
		</div>

</body>

</html>