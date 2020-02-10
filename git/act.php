<a href="index.php">voltar</a><br><br>
<?php 

  include_once "default.inc.php";
  require_once "Conexao.php";

  
  $data = isset($_POST['arq'])?$_POST['arq']:null;
  $data = explode(',',$data);
  $d1 = isset($_POST['table1'])?$_POST['table1']:null;
  $d2 = isset($_POST['table2'])?$_POST['table2']:null;
  $table = $d1.$d2;

  // echo "$data";

  $pdo = Conexao::getInstance();

  $stmt = $pdo->prepare("INSERT INTO $table VALUES(?, ?);");
  $stmt -> bindParam(1, $data[0]);
  $stmt -> bindParam(2, $data[1]);
  $stmt -> execute(); 

  header('location:index.php');
?>