<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- TITLE -->
	<title>Bad Words</title>
	<!-- LINK -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
		<div class="container px-3 w-2/4">
            <h3 class="uppercase font-bold leading-10">Scrivi il tuo testo</h3>
            <form action="./badwords.php" method="GET">
                <label class="uppercase font-bold leading-10" for="your-text"></label>
                <input class="border-2 border-indigo-600 p-2" id="your-text" type="textarea" name="your-text">
                <h3 class="uppercase font-bold leading-10">Scrivi la brutta parola</h3>
                <input class="border-2 border-indigo-600 p-2" id="your-badword" type="textarea" name="your-badword">
                <button class="border-2 border-indigo-600 p-2">Invia</button>
            </form>
		</div>

</body>

</html>