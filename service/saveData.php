<?php


if (isset($_POST['nome']) && isset($_POST['telefone'])) {

  require_once('./connection.php');

  //see if the user is already in the database
  $pdo_statement = $pdo->prepare("SELECT * FROM tb_landing WHERE telefone = :telefone OR email = :email");
  $pdo_statement->bindValue(':telefone', $_POST['telefone']);
  $pdo_statement->bindValue(':email', $_POST['email']);
  $pdo_statement->execute();
  $result = $pdo_statement->fetchAll();

  if ($result) {
    header('Location: index.php?usuarioJaCadastrado=1');
  } else {
    $dataAtual = date('d/m/Y H:i');
  
    $sql = "INSERT INTO tb_landing (nome, telefone, email, cidade, instagram, termos, recebimento, dataCriacao) 
    VALUES (:nome, :telefone, :email, :cidade, :instagram, :termos, :recebimento, :dataCriacao)";
  
    $pdo_statement = $pdo->prepare($sql);
   
    $result = $pdo_statement->execute(array(':nome' => $_POST['nome'], ':telefone' => $_POST['telefone'], ':email' => $_POST['email'], ':cidade' => $_POST['cidade'], ':instagram' => $_POST['instagram'], ':termos' => 'on', ':recebimento' => $_POST['recebimento'], ':dataCriacao' => $dataAtual));
  
    header('Location: obrigado.php');
  }


  
} else {
  header('Location: index.php');
}
/*

if (isset($_POST)) {
  var_dump($_POST);
}
*/
