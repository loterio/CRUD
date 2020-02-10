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
  <form action="act2.php" method='post'>
    <input type="text" name="arq" id="arq" placeholder='Separe os valores por ","'>
		<input type="submit" value="salvar">
		<input type="hidden" name="table" value='escola(nomeEscola,cidade,numAlunos,nomeDiretora)'>
  </form>
    <?php 
        $pdo = Conexao::getInstance();
        $consulta = $pdo->query("SELECT * FROM escola");
        echo "<table>";
				headTable(5,'#','nome escola','cidade','nº alunos','nome diretora');
				echo "<tbody>";
        while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)){ 
          echo "<tr>
          <td>{$linha['cod']}</td> 
          <td>{$linha['nomeEscola']}</td>
          <td>{$linha['cidade']}</td>
          <td>{$linha['numAlunos']}</td>
          <td>{$linha['nomeDiretora']}</td></tr>";
        }  
        echo "</tbody></table>"; 
    ?>       
</body>
</html>