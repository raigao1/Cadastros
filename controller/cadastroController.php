<?php
//require "../database/database.php";
//$db = new Database();
include_once("../database/database.php");


if(isset($_POST['type'])){
    $type = $_POST['type'];
    switch($type){
        case ("store"):
            store($_REQUEST, $conn);
            break;
        case ("update"):
            update($_REQUEST, $conn);
            break;
    } 
}else{
    $type = "listar";
}

function create(){
    try {
        //code...
        view::create($_POST);

        header("Location: view/create.php");
    } catch (\Throwable $th) {
        //throw $th;
        //echo "<script>alert(""); </script>";
    }
    

}

function update($params, $conn){
    
  //print_r($params);   '
    
  $id = $params['id'];
  $nome = $params['nome'];
  $telefone = $params['phone'];
  $dataNascimento = $params['data'];
  $cidade = $params['cidade'];
  $endereco = $params['endereco'];
  $uf = $params['uf'];

  try {
      $result = "UPDATE pessoas SET nome='$nome',telefone='$telefone',dataDeNascimento='$dataNascimento', cidade='$cidade', endereço='$endereco', uf='$uf' WHERE id='$id'" or die ("Banco de dados inativo");
      $resultado = mysqli_query($conn,$result);

      header("location: ../view/edit.php?'$id'");
      exit();

      } catch (Exception $e){ 
          header("Aconteceu algum erro ao conectar o banco de dados.");
          header($e);
          header("location: ../view/edit.php?'$id'");
          exit();
      }
      
      
}



function store($params, $conn){
    
    //print_r($params);
    
    $nome = $params['nome'];
    $telefone = $params['phone'];
    $dataNascimento = $params['data'];
    $cidade = $params['cidade'];
    $endereco = $params['endereco'];
    $uf = $params['uf'];

    try {
		$result = "INSERT INTO pessoas (nome,telefone,dataDeNascimento, cidade, endereço, uf) VALUES('$nome','$telefone','$dataNascimento','$cidade','$endereco','$uf')" or die ("Banco de dados inativo");
		$resultado = mysqli_query($conn,$result);

		header('location: ../index.php');
		exit();

		} catch (Exception $e){ 
			header("Aconteceu algum erro ao conectar o banco de dados.");
			header($e);
			header('location: ../view/create.php');
			exit();
		}

        
}

?>