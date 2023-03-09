<?php 
// echo $_GET["your-text"];
// echo $_GET["your-badword"];

$your_text= $_GET["your-text"];
$bad_word= $_GET["your-badword"];

$replaced= str_replace($bad_word, "***", $your_text);

?>

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
            <h3 class="uppercase font-bold leading-10" >Il tuo Testo</h3>
            <p class="border-2 border-indigo-600 p-2">
                <?php echo $your_text ?>
            </p>
            <h3 class="uppercase font-bold leading-10" >La brutta parola</h3>
            <p class="border-2 border-indigo-600 p-2">
                <?php echo $bad_word ?>
            </p>
            <h3 class="uppercase font-bold leading-10">Il tuo Testo censurato, così rispetta le linee guida</h3>
            <p class="text-xl border-2 border-indigo-600 p-2" name="your-text-censored">
                <?php echo $replaced ?>
            </p>
		</div>

</body>

</html>