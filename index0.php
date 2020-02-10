<!DOCTYPE html>
<?php 
    include "components.php";
    include_once "conf/default.inc.php";
    require_once "conf/Conexao.php";
    $title = "Lista 4";
    nav();
?>
<html>
<head>
    <meta charset="UTF-8">
    <title> <?php echo $title; ?> </title>
</head>
<body>
	<form action="act0.php" method='post'>
    <input type="text" name="arq" id="arq" placeholder='Separe os valores por ","'>
		<input type="submit" value="salvar">
		<input type="hidden" name="table1" value='cliente(nome'>
		<input type="hidden" name="table2" value=',email'>
		<input type="hidden" name="table3" value=',telefone)'>
		<input type="hidden" name="" value=''>
  </form>
    <?php 
        $pdo = Conexao::getInstance();
        $consulta = $pdo->query("SELECT * FROM cliente");
        echo "<table>";
				headTable(4,'#','nome','email','telefone');
				echo "<tbody>";
        while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)){
          echo "<tr>
           <td>{$linha['codigo']}</td>
           <td>{$linha['nome']}</td>
           <td>{$linha['email']}</td>
           <td>{$linha['telefone']}</td></tr>";
        } 
				echo "</tbody></table>";    
    ?>       
</body>
</html>