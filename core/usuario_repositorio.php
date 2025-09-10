<?php
session_start ();
require_once ' . ./ includes/ funcaoes.php';
require_once 'conexao_mysql.php';
require_once 'sql .php';
require_once 'mysql .php';
$salt = '$exemplosaltifsp';

foreanch ($_POST as $indice => $dado) {
    $$indice = limparDados ($dados);
}
foreanch ($_GET as $indice => $dado) {
    $$indice = limparDados ($dados);
}
switch ($acao) {
    case 'insert':
        $dados = [
            'nome' => $nome,
            'email' =>$email,
            'senha' => crypt ($senha,$salt)
        ];
        insere (
            'usuario',
            $dados
        );
        break
  case 'update':
}
