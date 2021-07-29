<?php
$usuario = $_POST["usuario"];
$senha = $_POST["senha"];
$senha = md5($senha); //criptografa a senha

/*conexao do banco de dados*/
$connect = mysqli_connect('localhost', 'root', '');
$db = mysqli_select_db($connect, 'login'); /*qual banco esta se conectando*/

/*selecionando dentro do banco o campo do usuario para ver se já existe algum cadastrado*/
$query_select = "SELECT usuario FROM usuario WHERE usuario = '$usuario'";

$select = mysqli_query($connect, $query_select);
$array = mysqli_fetch_array($select);

$logarray = $array['usuario'];

/*se usuario conter no banco vai exibir um alerta e redirecionar para o cadastro novamente*/
if ($usuario == "" || $usuario == null) {
  echo "<script language='javascript' type='text/javascript'>
    alert('O campo login deve ser preenchido');window.location.href='
    cadastro.php';</script>";
}
else {
  if ($logarray == $usuario) /*se a variavel que recebeu o usuario for igual o usuario do banco*/ {
    echo "<script language='javascript' type='text/javascript'>
     alert('Esse usuario já existe');
     window.location.href='cadastro.php';</script>";
    die();
  }
  /*se cadastro não existe esse usuario adiciona o que foi digitado*/ else {
    $query = "INSERT INTO usuario (usuario, senha) VALUES ('$usuario', '$senha')";
    /*insere na conexão do banco*/
    $insert = mysqli_query($connect, $query);

    if ($insert) //se inserir no banco
    {
      echo "<script language='javascript' type='text/javascript'>
         alert('Usuário cadastrado com sucesso!');
         window.location.href='login.php'</script>";
    } else //se não inserir
    {
      echo "<script language='javascript' type='text/javascript'>
         alert('Não foi possível cadastrar esse usuário');
         window.location.href='cadastro.php'</script>";
    }
  }
}
