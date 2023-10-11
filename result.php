<?php
session_start();
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

   <div class="container mt-4">
      <h5>La tua password è:</h5>
      <h6 class="mb-4"><?= $_SESSION["password"] ?></h6>
      <a href="index.php">Torna indietro</a>
   </div>

   

</body>
</html>