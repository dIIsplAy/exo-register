<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body{
            background-image: url('https://i.ytimg.com/vi/AuhzVsdcCEE/hq720.jpg');
        }
         @font-face {
            font-family: "capcommega";
            src: url('emulogic.ttf');
        }
        #soustitre{
            color: lightgrey;
            font-family: "capcommega";
    display:flex;
    flex-direction:column;
    align-items:center;
    font-size:0.6em;

        }

#titre{
    color: lightgrey;
    font-family: "capcommega";
    display:flex;
    flex-direction:column;
    align-items:center;

}
#log{
    font-family: "capcommega";
    padding-top:5%;
    display:flex;
    /*justify-content: center;*/
    flex-direction:column;
    align-items:center;
}
#register {
    
    font-family: "capcommega";
     padding-top:2%;
    display:flex;
    flex-direction:column;
    align-items:center;

}



        </style>
</head>
<body>
    <?php
     session_start();
    if (!isset($_SESSION['login'])){
echo'
    <h1 id="titre">Wessshhh Alorssss</h1>
    <h2 id="soustitre">BVNNN SUR MON BLOG MAGEULLL!!!!!<h2>
    <form id="log"method="POST" name="blog" action="/cours-php/exo-register/auth.php">
        <input type="log" name="login" placeholder="Pseudonyme" />
        <input type="password" name="pass" placeholder="Password" />
        <!--<button>SEND</button>-->
        <input type="submit" value="LOGIN" />
    </form>
    <form id="register"method="POST" name="register" action="/cours-php/exo-register/register.php">
     <input type="submit" value="REGISTER" />
     </form>
';
    }else {
        echo 'WESHHH !'.' '.$_SESSION['login'].' ';
        echo '<form action="/cours-php/exo-register/logout.php" method="POST"><button>se déconnecter</button></form>';
    }
  ?>       
</body>
</html>