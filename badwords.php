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
</head>

<body>
	
		<div class="container">
            <h3>Il tuo Testo</h3>
            <p>
                <?php echo $your_text ?>
            </p>
            <h3>La brutta parola</h3>
            <p>
                <?php echo $bad_word ?>
            </p>
            <h3>Il tuo Testo censurato, così rispetta le linee guida</h3>
            <p name="your-text-censored">
                <?php echo $replaced ?>
            </p>
		</div>

</body>

</html>