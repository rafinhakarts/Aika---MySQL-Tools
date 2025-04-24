<html>
<head>
<title>Top 10 Gold</title>
</head>
<body>

<?php
// Inclui o arquivo de conexão
include('conexao.php');
include('functions.php');



// Exemplo de uso da função:
$pdo = conn($host, $dbname, $usuario, $senha);  // Chama a função para obter a conexão

?>


<center>
<h1> Top 10 Gold </h1>

<?php getTop10Gold($pdo); // Chama a função para pegar os 10 maiores valores de Gold ?>


</body>
</html>