<!DOCTYPE html>
<?php 
	include "components.php";
    include_once "default.inc.php";
    require_once "Conexao.php";
    $title = "Lista 4";
    nav();
?>
<html>
<head>
    <meta charset="UTF-8">
    <title> <?php echo $title; ?> </title>
</head>
<body> 
  <form action="act4.php" method='post'>
    <input type="text" name="arq" id="arq" placeholder='Separe os valores por ","'>
		<input type="submit" value="salvar">
		<input type="hidden" name="table" value='alunos(nome,dataNasc,curso)'>
  </form>
    <?php 
        $pdo = Conexao::getInstance();
        $consulta = $pdo->query("SELECT * FROM alunos");
        echo "<table>";
				headTable(4,'#','nome','data nasc.','curso');
				echo "<tbody>";
        while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)){
          echo "<tr>
          <td>{$linha['codigo']}</td>
          <td>{$linha['nome']}</td> 
          <td>{$linha['dataNasc']}</td>
          <td>{$linha['curso']}</td></tr>";
        }  
          echo "</tbody></table>"; 
    ?>       
</body>
</html>