<?php
    include_once("../templates/header.php");
    include_once("../database/database.php");

    if(isset($_GET['id'])){
        $id = $_GET['id'];
    } else {
        header('location: ../view/listar.php');
        exit();
    }

    $sql = "SELECT * FROM pessoas WHERE id = '$id' limit 1"; 
	$resultado_consulta = mysqli_query($conn, $sql) or die ("Não foi possivel conectar no banco de dados. Tente novamente mais tarde."); 
	$row = mysqli_fetch_assoc($resultado_consulta);

?>
 
<br/>
<ul>

<li scope="col">Nome: <?php echo ($row['nome']); ?></li>
<li scope="col">Telefone: <?php echo ($row['telefone']); ?></li>
<li scope="col">Data de Nascimento: <?php echo ($row['dataDeNascimento']); ?></li>
<li scope="col">Endereço: <?php echo ($row['endereço']); ?></li>
<li scope="col">Cidade: <?php echo ($row['cidade']); ?></li>
<li scope="col">UF: <?php echo ($row['uf']); ?></li>

</ul>
</br>
<?php
    include_once("../templates/footer.php");
?>