<?php

include './functions.php';



if(!empty($_GET['psw_length'])){
    session_start();

    $_SESSION['psw_length'] = getRandomPassword($lunghezzaPassword);
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
<body>


    <div class="container m-0">
        <form action="index.php" method="GET" >
            <div class="row">
                <div class="col">
                   <label for="input">Inserisci la lunghezza della password da generare</label>
                   <input type="number" name="psw_length" min="1" max="20">
                </div>
            </div>
            <div class="row mt-3">
                <div class="col">
                    <button type="submit" class="btn btn-info">Genera</button>
                </div>
            </div>
        </form>
    </div>
</body>
</html>