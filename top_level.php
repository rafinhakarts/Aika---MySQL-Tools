<html>
<head>
<title>Top 10 Level</title>
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
<h1> Top 10 Level </h1>

<?php getTop10Level($pdo); // Chama a função para pegar os 10 maiores valores de Level?>


</body>
</html>