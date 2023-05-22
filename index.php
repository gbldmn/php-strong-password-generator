<?php

include './functions.php';



if(!empty($_GET['lunghezza_password'])){
    session_start();
    $_SESSION['lunghezza_password'] = getRandomPassword($lunghezzaPassword);
    header('Location: ./psw.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="file.css/style.css">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css' integrity='sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==' crossorigin='anonymous' />
</head>
<body class="bg-secondary">


    <div class="container container2 bg-white  mt-5 pt-3 pb-5">
        <h1 class="text-center">Strong Password Generator</h1>
        <h2 class="text-center mb-4">Genera una password sicura</h2>
        <form action="index.php" method="GET">
            <div class="row">
                <div class="col text-center">
                   <label for="input">Inserisci la lunghezza della password insicura da generare</label><br>
                   <input type="number" name="lunghezza_password" min="1" max="20">
                </div>
            </div>
            <div class="row mt-3">
                <div class="col text-center">
                    <button type="submit" class="btn btn-info bg-secondary btn-lg">Genera</button>
                </div>
            </div>
        </form>
    </div>

    <style>
    .container2{
      width: 60%;
    }
  </style>
</body>
</html>