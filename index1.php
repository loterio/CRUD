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
  <form action="act1.php" method='post'>
    <input type="text" name="arq" id="arq" placeholder='Separe os valores por ","'>
		<input type="submit" value="salvar">
		<input type="hidden" name="table1" value='vendedor(nomeDeUsuario'>
		<input type="hidden" name="table2" value=',senha'>
		<input type="hidden" name="table3" value=',nome'>
		<input type="hidden" name="table4" value=',email'>
    <input type="hidden" name="table5" value=',telefone)'>
  </form>
    <?php  
        $pdo = Conexao::getInstance();
        $consulta = $pdo->query("SELECT * FROM vendedor");
        echo "<table>";
				headTable(6,'#','username','senha','nome','email','telefone');
				echo "<tbody>";
        while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
          echo "<tr>
            <td>{$linha['codigo']}</td> 
            <td>{$linha['nomeDeUsuario']}</td> 
            <td>{$linha['senha']}</td>
            <td>{$linha['nome']}</td>
            <td>{$linha['email']}</td>
            <td>{$linha['telefone']}</td></tr>";
        }    
				echo "</tbody></table>"; 
    ?>       
</body>
</html>