<?php 
         $lunghezzaPassword = $_GET['lunghezza_password'];

        function getRandomPassword($lunghezzaPassword){
          $password = '';
          $caratteri = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!?&%$<>^+-*/()[]{}@#_=';
    
          for($i = 0; $i < $lunghezzaPassword; $i++){
               $password .= $caratteri[rand (0, strlen($caratteri) -1 )];
           }
            // var_dump($password);
           return $password;
         };
          // var_dump($password);
        //  getRandomPassword($lunghezzaPassword);
    ?>
