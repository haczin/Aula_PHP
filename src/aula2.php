<h1> aula2 - 12/03/2026 </h1>
<?php
$idade = 34;
echo "idade = $idade<br>";
$cep = "01012123";
echo "cep = $cep<br>";
/* 
bases 
dedimal 0123456789 10
binaria 01 10
octal 01234567 10
hexadecimal 0123456789ABCDEF 10
*/
$preco = 5247.543;
echo "preco = R$";
echo number_format($preco,2,",",".");
echo "<hr>";
$cor = "green";
echo "cor = $cor<br>";
echo 'cor = $cor<br>';
echo "<h2 style='color:$cor;'>Outro Titulo 2 </h2>";
$ativo = true;
echo "está ativo? $ativo <br>";
echo "<hr>"; 
echo "Aquela era: ".$cor;
echo "<hr>";
$nota=7.8;
echo "nota = ".(int)$nota;
?>
<h2 style="color:blue;">Titulo 2 </h2>
