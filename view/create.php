<?php
    include_once("../templates/header.php");
?>
<br/>
<form id= "create-form" action= "../controller/cadastroController.php" method="POST">
    <input type="hidden" name ="type" value="store">
    <div class="container">

    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1">Nome</span>
        </div>
        <input type="text" class="form-control" placeholder=""name="nome" aria-label="" aria-describedby="basic-addon1"required>
    </div>
    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1">Telefone</span>
        </div>
        <input type="number" class="form-control" placeholder=""name="phone" aria-label="" aria-describedby="basic-addon1"required>
    </div>
    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1">Data de Nascimento</span>
        </div>
        <input type="date" class="form-control" placeholder=""name="data" aria-label="" aria-describedby="basic-addon1"required>
    </div>
    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1">Endereço</span>
        </div>
        <input type="text" class="form-control" placeholder=""name="endereco" aria-label="" aria-describedby="basic-addon1"required>
    </div>
    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1">Cidade</span>
        </div>
        <input type="text" class="form-control" placeholder=""name="cidade" aria-label="" aria-describedby="basic-addon1"required>
    </div>
    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1">UF</span>
        </div>
        <input type="text" class="form-control" placeholder=""name="uf" aria-label="" aria-describedby="basic-addon1"required>
    </div>
    <div class="d-flex justify-content-center">
    <button type="submit" class="btn btn-secondary btn-lg button-style">Cadastrar</button>
    </div>
    </div>
</form>
    <br/>
<?php
    include_once("../templates/footer.php");
?>
