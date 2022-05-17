<?php
    include_once("../templates/header.php");
    include_once("../database/database.php");

    if(isset($_GET['id'])){
        $id = $_GET['id'];
    } else {
        header('location: ../view/create.php');
        exit();
    }


    $sql = "DELETE FROM pessoas WHERE id = '$id'"; 
    if(mysqli_query($conn, $sql)){
        echo "Records were deleted successfully.";
        header('location: ../view/listar.php');
        exit();
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
    }

?>


<?php
    include_once("../templates/footer.php");
?>