<!DOCTYPE html>

<html  = lang"pt-br">
<head>
    <title>Inscrição Simulado UFSC Julho/2017</title>
</head>
<body>

<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "cadastro";
$conexao =@mysql_connect($host,$user, $pass) or die(mysql_error());
mysql_select_db($db) or die(mysql_error());
?>


<?php
$nome=$_POST['Nome'];
$cpf=$_POST['CPF'];                 //Colocar aqui o CPF ou número de inscrição do aluno
$curso=$_POST['Curso Desejado'];    //Verificar se é interessante disponibilizar lista de cursos (acho que sim)
$email=$_POST['Email'];
$cota=$_POST['Opção de Cota'];      //Mudar para visualização em Lista (Usuário escolhe um item da Lista

$sql = mysql_query("INSERT INTO usuarios(nome, cpf, curso, email, cota) VALUES('$nome', '$cpf', '$curso', '$email', '$cota')");
echo "<center><h1>Inscrição Efetuada com Sucesso</h1></center>";
echo "<center><h1>Verifique seu email para confirmação da Inscrição</h1></center>";
?>

</body>
</html>
