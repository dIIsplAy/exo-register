<?php
// header("content-type: text/plain");
$info = file_get_contents("auth.json");
$decode = json_decode($info);
print_r($decode);

$login = htmlspecialchars($_POST['login']);
$pass = htmlspecialchars($_POST['pass']);
$wrong =false ;

foreach ($decode as $user) {
    print_r($user);
    $ver_login = htmlspecialchars($user->login);
    if (strtolower($login) === $ver_login) {
        echo "This username is already taken";
        $wrong = true;
        exit(1);
          return true;
    }
}
if($pass ===""){
    echo"plz use password";

} else{
    $pass = md5($pass);
    $obj  = new class {};
    $obj->login = $login;
    $obj->pass = $pass;
    array_push($decode, $obj);
    $encode = json_encode($decode);
    $open = fopen('auth.json', 'w') or die();
    fwrite  ($open, $encode);
    fclose  ($open);
    session_start();
          $_SESSION['login'] =$log ;
    echo"<script>";
            echo "location.href =\"/cours-php/blog-php/indexblog.php\"";
            echo "</script>";
    echo"bg ta reussi";
}
?>