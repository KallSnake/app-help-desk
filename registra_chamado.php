<?php 

/*
echo "<pre>";
print_r($_POST);
echo "</pre>";
*/


session_start();





// trabalhando na montagem do texto

// replace do "#" por "-", pois na hora de salvar no arquivo não confundir na separação de valores(ou seja na separação dos dados)
$titulo = str_replace("#", "-", $_POST["titulo"]);

$categoria = str_replace("#", "-", $_POST["categoria"]);

$descricao = str_replace("#", "-", $_POST["descricao"]);



// fopen(filename, mode); // criando/abrindo o arquivo (arquivo.txt)


// fopen("arquivo.hd", "a"); // o mode "a" (aberto apenas para escrita)


$arquivo = fopen("../../../app_help_desk/arquivo.hd", "a");


// $texto = $_POST["titulo"] . "#" . $_POST["categoria"] . "#" . $_POST["descricao"];


$texto = $_SESSION["id"] . "#" . $titulo . "#" . $categoria . "#" . $descricao . PHP_EOL; // PHP_EOL => EOL = End Of Line, é uma constante do php, essa constante armazena o caractere de quebra de linha de acordo com o sistema operacional


// echo $texto;


// fwrite(handle, string); // escrevendo o texto


fwrite($arquivo, $texto);


// fclose(handle); // fechando o arquivo (anteriormente aberto) com a referencia criada


fclose($arquivo);


// redirecionando a página após criar/escrever/fechar o arquivo
header("Location: abrir_chamado.php");



?>