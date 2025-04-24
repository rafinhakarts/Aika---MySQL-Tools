<?php
function getTop10Cash($pdo) {
    try {
        // Consulta SQL para pegar os 10 maiores valores de 'cash', ordenando de forma descendente
        $sql = "SELECT username, cash FROM accounts ORDER BY cash DESC LIMIT 10"; //aqui voce pode selecionar o valor de entries que pode vir, além de 10, ou colocar uma variavel global

        // Prepara a consulta
        $stmt = $pdo->prepare($sql);

        // Executa a consulta
        $stmt->execute();

        // Verifica se há resultados
        if ($stmt->rowCount() > 0) {
            // Loop para exibir os 10 maiores valores de cash
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                echo "<strong>Username</strong>: <font color='green'>" . $row['username'] . "</font> - <strong>Quantidade de Cash</strong>: <font color='red'>" . $row['cash'] . "</font><br><br>";
            }
        } else {
            echo "Nenhum dado encontrado.";
        }
    } catch (PDOException $e) {
        // Caso ocorra um erro, exibe a mensagem de erro
        echo "Erro ao buscar os maiores valores de cash: " . $e->getMessage();
    }
}

function getTop10Gold($pdo) {
    try {
        // Consulta SQL para pegar os 10 maiores valores de 'cash', ordenando de forma descendente
        $sql = "SELECT name, gold FROM characters ORDER BY gold DESC LIMIT 10"; //aqui voce pode selecionar o valor de entries que pode vir, além de 10, ou colocar uma variavel global

        // Prepara a consulta
        $stmt = $pdo->prepare($sql);

        // Executa a consulta
        $stmt->execute();

        // Verifica se há resultados
        if ($stmt->rowCount() > 0) {
            // Loop para exibir os 10 maiores valores de gold
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                echo "<strong>Username</strong>: <font color='green'>" . $row['name'] . "</font> - <strong>Quantidade de Gold</strong>: <font color='red'>" . $row['gold'] . " gold(s)</font><br><br>";
            }
        } else {
            echo "Nenhum dado encontrado.";
        }
    } catch (PDOException $e) {
        // Caso ocorra um erro, exibe a mensagem de erro
        echo "Erro ao buscar os maiores valores de gold: " . $e->getMessage();
    }
}




function getTop10Level($pdo) {
    try {
        // Consulta SQL para pegar os 10 maiores valores de 'level', ordenando de forma descendente
        $sql = "SELECT name, level FROM characters ORDER BY level DESC LIMIT 10"; //aqui voce pode selecionar o valor de entries que pode vir, além de 10, ou colocar uma variavel global

        // Prepara a consulta
        $stmt = $pdo->prepare($sql);

        // Executa a consulta
        $stmt->execute();

        // Verifica se há resultados
        if ($stmt->rowCount() > 0) {
			$count = 0;
            // Loop para exibir os 10 maiores valores de Level
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
				
				
				if ($count == 0){
					echo "<br><p><strong>TOP LEVEL</strong></p>";
					echo "<strong>Username</strong>: <font color='green'>" . $row['name'] . "</font> - <strong>Quantidade de level</strong>: <font color='red'>" . $row['level'] . " level(s)</font><p></p><br><br>";
					
					$count++;
					
					}
				else
				{
                echo "<strong>Username</strong>: <font color='green'>" . $row['name'] . "</font> - <strong>Quantidade de level</strong>: <font color='red'>" . $row['level'] . " level(s)</font><br><br>";
				}
            }
        } else {
            echo "Nenhum dado encontrado.";
        }
    } catch (PDOException $e) {
        // Caso ocorra um erro, exibe a mensagem de erro
        echo "Erro ao buscar os maiores valores de Level: " . $e->getMessage();
    }
}