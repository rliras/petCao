<?php 
  require_once "header.php";

  $stmt = $conn->prepare("SELECT * from cadastro_animal as ca
                            inner join cadastro_pessoa as cp
                              on cp.id_pessoa = ca.id_pessoa");
  $stmt->execute();

  $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);

  // var_dump($stmt->fetchAll());

  $lista = $stmt->fetchAll();

  echo "<table class='table striped condensed'>";
  foreach ($lista as $item) {
    echo "<tr>";
    foreach ($item as $k => $v) {
      echo "<td>";
      echo $v;
      echo "</td>";
    }
    echo "<tr>";
  }
  echo "</table>";



  require_once "footer.php";
?>