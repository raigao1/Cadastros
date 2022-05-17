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
<form id= "create-form" action= "../controller/cadastroController.php" method="POST">
    <input type="hidden" name ="type" value="update">
    <input type="hidden" name ="id" value="<?php echo($id) ?>">
    <<div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1">Nome</span>
        </div>
        <input type="text" class="form-control" placeholder=""name="nome" value="<?php echo ($row['nome']); ?>" aria-label="" aria-describedby="basic-addon1"required>
    </div>
    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1">Telefone</span>
        </div>
        <input type="number" class="form-control" placeholder=""name="phone" value="<?php echo ($row['telefone']); ?>" aria-label="" aria-describedby="basic-addon1"required>
    </div>
    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1">Data de Nascimento</span>
        </div>
        <input type="date" class="form-control" placeholder=""name="data" value="<?php echo ($row['dataDeNascimento']); ?>" aria-label="" aria-describedby="basic-addon1"required>
    </div>
    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1">Endereço</span>
        </div>
        <input type="text" class="form-control" placeholder=""name="endereco" value="<?php echo ($row['endereço']); ?>" aria-label="" aria-describedby="basic-addon1"required>
    </div>
    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1">Cidade</span>
        </div>
        <input type="text" class="form-control" placeholder=""name="cidade" value="<?php echo ($row['cidade']); ?>" aria-label="" aria-describedby="basic-addon1"required>
    </div>
    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1">UF</span>
        </div>
        <input type="text" class="form-control" placeholder=""name="uf" value="<?php echo ($row['uf']); ?>" aria-label="" aria-describedby="basic-addon1"required>
    </div>
    <div class="d-flex justify-content-center">
    <button type="submit" class="btn btn-secondary btn-lg button-style">Atualizar</button>
    </div>
    </div>
</form>
    <br/>
<?php
    include_once("../templates/footer.php");
?>
