<a href="index.php">voltar</a><br><br>
<?php 

  include_once "../conf/default.inc.php";
  require_once "../conf/Conexao.php";

  
  $data = isset($_POST['arq'])?$_POST['arq']:null;
  $data = explode(',',$data);
  $d1 = isset($_POST['table1'])?$_POST['table1']:null;
  $d2 = isset($_POST['table2'])?$_POST['table2']:null;
  $d3 = isset($_POST['table3'])?$_POST['table3']:null;
  $d4 = isset($_POST['table4'])?$_POST['table4']:null;
  $d5 = isset($_POST['table5'])?$_POST['table5']:null;
  $table = $d1.$d2.$d3.$d4.$d5;

  // echo "$data";

  $pdo = Conexao::getInstance();

  $stmt = $pdo->prepare("INSERT INTO $table VALUES(?, ?, ?, ?, ?);");
  $stmt -> bindParam(1, $data[0]);
  $stmt -> bindParam(2, $data[1]);
  $stmt -> bindParam(3, $data[2]);
  $stmt -> bindParam(4, $data[3]);
  $stmt -> bindParam(5, $data[4]);
  $stmt -> execute(); 

  header('location:index1.php');
?>