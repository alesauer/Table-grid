<?php

class Database
{
    function connect($query)
    {
        $_host = '127.0.0.1';
        $_user = 'financeiro';
        $_password = 'GxgLTr201@';
        $_database = 'temp-sauer';
        
        $conn = mysqli_connect($_host,$_user,$_password) or die("<h4>Erro: Conexão não pode ser realizada: $_host - $_user - $_password - $_database</h4>");
        $banco = mysqli_select_db($conn,$_database) or die("Erro: Banco de Dados não encontrado: $_database");
        mysqli_set_charset($conn,'utf8');
        $result = mysqli_query($conn,$query) or die("Erro: Query: $query");
        return($result);
        exit;
    }
}//end class


?>
