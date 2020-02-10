<?php 
  function nav() {
    echo "
    <table>
      <tr>
        <td><a href='index.php'> Ex.1 </a></td>
        <td><a href='index0.php'> Ex.2 </a></td>
        <td><a href='index1.php'> Ex.3 </a></td>
        <td><a href='index2.php'> Ex.4 </a></td>
        <td><a href='index3.php'> Ex.5 </a></td>
        <td><a href='index4.php'> Ex.6 </a></td>
      </tr>
    </table>
    <br><br>
    ";
  }

  function headTable(){
    $params = func_get_args();
    $col = $params[0];
    $qtd = count($params) - 1;

    echo "<thead><tr>";
    for ($i=0; $i < $qtd; $i++) { 
      $x = $i + 1;
      echo "<th>$params[$x]</th>";
    }
    echo "</tr></thead>";
    
  }
?>
