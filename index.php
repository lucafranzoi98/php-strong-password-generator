<?php

$number = $_GET["number"];

function getPassword($number) {
	$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ?!@#$%^&*()';
	$randomString = '';

	for ($i = 0; $i < $number; $i++) {
		$index = rand(0, strlen($characters) - 1);
		$randomString .= $characters[$index];
	}

	return $randomString;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
   <title>Psw generator</title>
</head>
<body class="bg-dark text-white">
   <h1 class="text-center my-4">Strong Password Generator</h1>

   <form method="$_GET" class="container">
      <div class="mb-3 d-flex align-items-center">
         <label for="number" class="form-label me-3">Lunghezza password: </label>
         <input type="number" class="form-control w-25" id="number" name="number">
      </div>
      <button type="submit" class="btn btn-primary me-3">Genera</button>
      <button type="reset" class="btn btn-warning">Annulla</button>
   </form>

   <?php if($number != "") : ?>

   <div class="container mt-4">
      <h5>La tua password è:</h5>
      <h6><?= getPassword($number) ?></h6>
   </div>

   <?php endif ?>
</body>
</html>