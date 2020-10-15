<?php


// checking for minimum PHP version
if (version_compare(PHP_VERSION, '5.3.7', '<')) {
    exit("PHP 5.3.7 requerido!");
} else if (version_compare(PHP_VERSION, '5.5.0', '<')) {
    // if you are using PHP 5.3 or PHP 5.4 you have to include the password_api_compatibility_library.php
    // (this library adds the PHP 5.5 password hashing functions to older versions of PHP)
    require_once("libraries/password_compatibility_library.php");
}

// include the configs / constants for the database connection
require_once("config/db.php");

// load the login class
require_once("classes/Login.php");

// create a login object. when this object is created, it will do all login/logout stuff automatically
// so this single line handles the entire login process. in consequence, you can simply ...
$login = new Login();

// ... ask if we are logged in here:
if ($login->isUserLoggedIn() == true) {
    if(isset($_POST["pag"])){
        $pag=$_POST["pag"];
        include("views/".$pag);  
    }
    elseif(isset($_GET["pag"])){
        $pag=$_GET["pag"];
        include("views/".$pag);  
    }
    else{
        include("views/paginaPrincipal.php");
    }

} else {
    // the user is not logged in. you can do whatever you want here.
    // for demonstration purposes, we simply show the "you are not logged in" view.
    if(isset($_GET["pag"]) AND $_GET["pag"]=="validacaoCert.php"){
        include("views/validacaoCert.php");  
    }elseif(isset($_GET["pag"]) AND $_GET["pag"]=="gerargift.php"){
        include("views/gerargift.php");
    }elseif(isset($_GET["pag"]) AND $_GET["pag"]=="geradorGift/geradorgift.php"){
        include("views/geradorGift/geradorgift.php");
    }elseif(isset($_GET["pag"]) AND $_GET["pag"]=="matriculaManual.php"){
        include("views/matriculaManual.php");  
    }elseif(isset($_GET["pag"]) AND $_GET["pag"]=="matriculaManual/matricula.php"){
        include("views/matriculaManual/matricula.php");  
    }elseif(isset($_GET["pag"]) AND $_GET["pag"]=="editarAluno.php"){
        header("Location: views/editarAluno.php");  
    }else{
        include("views/paginaLogin.php");
        echo "<script> console.log('deslogado'); </script>";
    }
    
}
