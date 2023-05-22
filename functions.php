<?php 
        $lunghezzaPassword = $_GET['psw_length'];

        function getRandomPassword($lunghezzaPassword){
          $caratteri = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!?&%$<>^+-*/()[]{}@#_=';
          $password = '';
          for($i = 0; $i < $lunghezzaPassword; $i++){
            $password .= $caratteri[rand (0, strlen($caratteri))];
          }
          var_dump($password);
          return $password;
        };
        // var_dump($password);
        echo getRandomPassword($lunghezzaPassword);
    ?>
