<?php
function validaFormulario($array): bool {
    // Percorre cada indice do array
    foreach ($array as $string) {
        $f_string = htmlspecialchars($string, ENT_QUOTES);

        // Verifica se a string sanitizada e diferente da original
        if ($f_string != $string) {
            header("{$_SERVER['HTTP_REFERER']}");
            exit();
        }
    }
    return true;
}

function sanitizaFormulario($array): array {
    // Percorre cada indice do array
    foreach ($array as $key => $value) {
        // Remover as tags HTML, contrabarras e espaços em branco de uma.
        $value = filter_var($value, FILTER_SANITIZE_STRING);
        $value = stripslashes($value);
        $value = trim($value);

        // Escapa a variavel para consultar no banco de dados
        $value = mysqli_escape_string(CONNECT, $value);

        // Sobreescreve o valor original
        $array[$key] = $value;
    }
    return $array;
}
?>