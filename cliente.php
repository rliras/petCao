<?php 
  require_once "header.php";

  if(isset($_POST['nome'])){

        $nome = $_POST["nome"];
        $cpf  = $_POST["cpf"];

        try {
            $sql = "INSERT into 
                    cadastro_pessoa (nome, cpf) 
                    values('$nome', $cpf);";
            // use exec() because no results are returned
            $conn->exec($sql);
            echo "Novo registro inserido";
            }
        catch(PDOException $e)
            {
            echo $sql . "<br>" . $e->getMessage();
            }
        
        $conn = null;

  }
?>

<div class="row">
    <form action="" method="POST">
        <div class="form-group">
            <label>Nome</label> <input type="text" name="nome"><br>
            <label>CPF</label> <input type="text" name="cpf">
            <input type="submit" value="Salvar">
        </div>
    <form>
</div>

<?php
  require_once "footer.php";
?>
