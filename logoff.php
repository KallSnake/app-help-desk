<?php


session_start();


/*
echo "<pre>";
print_r($_SESSION);
echo "</pre>";
*/


// remove o índice do array de sessão
// unset() // remove o índice apenas se existir

// unset($_SESSION["aunteticado"]);



// destroi as variáveis de sessão (todas as variáveis)
// session_destroy() // será destruida porém é necessário forçar um redirecionamento (reload da página)


session_destroy();

header("Location: index.php");


?>