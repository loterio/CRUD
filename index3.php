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
  <form action="act3.php" method='post'>
    <input type="text" name="arq" id="arq" placeholder='Separe os valores por ","'>
		<input type="submit" value="salvar">
		<input type="hidden" name="table" value='paises(nome,sigla,continente)'>
  </form>
    <?php 
        $pdo = Conexao::getInstance();
        $consulta = $pdo->query("SELECT * FROM paises");
        echo "<table>";
				headTable(4,'#','nome','sigla','continente');
				echo "<tbody>";
        while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
          echo "<tr>
          <td>{$linha['cod']}</td> 
          <td>{$linha['nome']}</td> 
          <td>{$linha['sigla']}</td>
          <td>{$linha['continente']}</td></tr>";
        }  
          echo "</tbody></table>"; 
    ?>       
</body>
</html>