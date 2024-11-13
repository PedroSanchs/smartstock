<?php
try {
    $db = new PDO('sqlite:'.__DIR__.'/smartstock.db');

    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Conexão bem-sucedida!";
} catch (PDOException $e) {
    echo "Erro na conexão: " . $e->getMessage();
}

// Nos testes a conecção ja esta funcionando, ainda não chequei as tabelas pra ver se ja foram criadas, mas acho que ja estão.
// Não mecher nesse arquivo, a não ser em caso de erro com a conexão ao bd, tudo que for criar para o crud fazer em um novo arquivo, obrigado 
    
?>

