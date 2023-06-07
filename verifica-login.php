<?php
// $_POST pega as informações do input
$nick = $_POST["nick"];
$senha = $_POST["senha"];

include("conecta.php"); //conecta com o bando de dados

$comando = $pdo->prepare("SELECT * FROM cadastro WHERE nick = '$nick' and senha = '$senha' ");
$resultado = $comando->execute();
$n = 0;
$admim = "n";

while($linhas = $comando->fetch())
{
    $n = 1;
    $admim = $linhas["admim"];
 }

if($n == 0)
{
    header("location:cadastro.html");
}
if($n == 1)
{
    if($admim == "s")
    {
        header("location:admim.html");
    } 
    else{
        header("location:FLOPPY ARCH.html");
    }
}
?>
