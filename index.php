<?php
    include_once("templates/header.php");
?>

<?php

if (isset($_GET['page'])){
    $page = $_GET['page'];
} else {
    $page = "listar";
}

switch($page){
    case ("listar"):
        header("Location: view/listar.php");
        die();
        break;
    case ("criar"):
        header("Location: view/create.php");
        die();
        break;
    case ("editar"):
        header("Location: view/edit.php");
        die();
        break;
      
};

?>
   
    
<?php
    include_once("templates/footer.php");
?>
