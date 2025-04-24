<?php
$host = '127.0.0.1'; //host local ou externo
$dbname = 'aika_4'; //nome do seu db
$usuario = 'root'; //nome do usuario do mysql 
$senha = 'rafinha'; //senha do seu usuario mysql 

function conn($host, $dbname, $usuario, $senha) {
    try { //da um try catch pra sinalizar o erro, caso exista.
		
        $dsn = "mysql:host=$host;dbname=$dbname;charset=utf8mb4";
        $pdo = new PDO($dsn, $usuario, $senha);
        
        // Definir o modo de erro para exceções
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       

        return $pdo;
    } catch (PDOException $e) {
        // Mensagem de erro caso haja falha na conexão
        echo "Erro ao tentar conectar ao banco de dados: " . $e->getMessage() . "\n";
        die();  // Para a execução do script em caso de erro
    }
}
?>
