<?php
    include_once("../templates/header.php");
    include_once("../database/database.php");
?>
<br/>
<div class ="container">
<table class="table">
  <thead>
    <tr>
      <th scope="col">Nome</th>
      <th scope="col">Telefone</th>
      <th scope="col">Endereço</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    <?php
     $sql = "SELECT id, nome, telefone, dataDeNascimento, endereço, cidade, uf FROM pessoas"; 
    // $sql = "UPDATE nome, telefone, dataDeNascimento, endereço, cidade, uf SET pessoas"; 

      $resultado_consulta = mysqli_query($conn, $sql) or die ("Não foi possivel conectar no banco de dados. Tente novamente mais tarde."); 
  
      while ($row_pessoa = mysqli_fetch_assoc($resultado_consulta)):
    ?>
   
      <tr>
      
        <td><?php echo $row_pessoa['nome'];?></td>
        <td><?php echo $row_pessoa['telefone'];?></td>
        <td><?php echo $row_pessoa['endereço'];?></td>
        <td>
        <form action="../view/read.php" method="get">
          <input type="hidden" name="id" value="<?php echo $row_pessoa['id'] ?>">
          
          <td><button type="submit" class="btn btn-primary">Visualizar</button></td>
        </form>
        <form action="../view/edit.php" method="get">
          <input type="hidden" name="id" value="<?php echo $row_pessoa['id'] ?>">
          
          <td><button type="submit" class="btn btn-primary">Editar</button></td>
        </form>
        <form action="../view/delete.php" method="get">
          <input type="hidden" name="id" value="<?php echo $row_pessoa['id'] ?>">
          
          <td><button type="submit" class="btn btn-danger">Deletar</button></td>
        </form>
      </td>
        
        
      </tr>
    <?php endwhile ?>


     
   
  </tbody>
</table>
</div>
    <br/>
<?php
    include_once("../templates/footer.php");
?>