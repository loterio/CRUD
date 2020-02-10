<!DOCTYPE html>
<?php 
		$data = isset($_POST['arq']) ? $_POST['arq'] : null;
    include_once "default.inc.php";
		require_once "Conexao.php";
		include "components.php"; 
		nav();
		$title = "Lista 4";

?>
<html>
<head>
    <meta charset="UTF-8">
    <title> <?php echo $title; ?> </title>
</head>
<body>
	<form action="act.php" method='post'>
    <input type="text" name="arq" id="arq" placeholder='Separe os valores por ","'>
		<input type="submit" value="salvar">
		<input type="hidden" name="table1" value='estados(nome'>
		<input type="hidden" name="table2" value=',sigla)'>
  </form>
    <?php 
        $pdo = Conexao::getInstance();
				$stmt = $pdo->query("SELECT * FROM estados");
				echo "<table>";
				headTable(3,'#','nome','sigla');
				echo "<tbody>";
				while ($line = $stmt->fetch(PDO::FETCH_ASSOC)){ 
					echo "<tr>
						<td>{$line['codigo']}</td> 
						<td>{$line['nome']}</td> 
						<td>{$line['sigla']}</td></tr>";
				}
				echo "</tbody></table>";		
    ?>       
</body>
</html>