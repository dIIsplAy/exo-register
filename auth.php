<?php
include ('/home/cristophol/dev/cours-php/exo-register/header.php');
// cette page permet de recuperé les information dun formulaire et les met 
// dans un tableau qu'il parcours jusqua trouver les deux bonne valeur qui permete la conection'
    $log = $_POST['login'];
    $password = $_POST['pass'];
    // md5 sers a encrypté un mots de passe pour le rendre securisé
    $encryptage = md5($password);
    $json_source = file_get_contents("auth.json");
    $json_datas = json_decode($json_source);



$found= false;
// echo $log.'<br/>';
//         echo $encryptage.'<br/>';

    foreach ($json_datas as $json_data){
        // var_dump ($json_data);
        
        // echo $json_data->login.'<br/>';
        // echo $json_data->pass.'<br/>';
      
        if ($log == $json_data->login && $encryptage== $json_data->pass){
            
          $found = true;
          break;
          
          return true;
        }   
        
    }

    if($found) {
        session_start();
          $_SESSION['login'] =$log ;
          echo "Le Log est correct!";
            echo "</br>";
            echo "le password est fine";
            echo"<script>";
            echo "location.href =\"/cours-php/blog-php/indexblog.php\"";
            echo "</script>";
            
    }else {
        echo 'Le mots de passe ou l\'utilisateur sont incorect';
         echo '<form action=logout.php method="POST"><button>se déconnecter</button></form>';
    }

        

      
     
    
     
?>



