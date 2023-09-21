<?php

// Função para validar placas de veículos
function validarPlaca($placa){
    // Inicializa a resposta como "placa inválida"
    $resposta = "placa inválida";
    
    // Expressão Regular para o formato atual de placa (três letras seguidas de quatro números)
    $regexPlaca = '/^[a-zA-Z]{3}[0-9]{4}$/';
    
    // Expressão Regular para o padrão Mercosul de placa de carro
    // (três letras seguidas de um número, uma letra, e dois números)
    $regexPlacaMercosulCarro = '/^[a-zA-Z]{3}[0-9]{1}[a-zA-Z]{1}[0-9]{2}$/';
    
    // Expressão Regular para o padrão Mercosul de placa de moto
    // (três letras seguidas de dois números, uma letra, e um número)
    $regexPlacaMercosulMoto = '/^[a-zA-Z]{3}[0-9]{2}[a-zA-Z]{1}[0-9]{1}$/';
    
    // Verifica cada expressão regular
    //Verifica se a placa corresponde ao formato atual utilizando preg_match, uma função PHP para realizar correspondência com expressões regulares.
    if (preg_match($regexPlaca, $placa)) {
        $resposta = "Placa válida no formato atual";
    }
    if (preg_match($regexPlacaMercosulCarro, $placa)) {
        $resposta = "Placa válida (padrão Mercosul - carro)";
    }
    if (preg_match($regexPlacaMercosulMoto, $placa)) {
        $resposta = "Placa válida (padrão Mercosul - moto)";
    }
    
    // Retorna a resposta
    return $resposta;
}

// Exemplos de uso
echo validarPlaca("ABC1234") . "<br>";   
echo validarPlaca("ABC12356") . "<br>";  
echo validarPlaca("ABC12D5") . "<br>";   
echo validarPlaca("ABC1D15") . "<br>";   
echo validarPlaca("OXM1G01") . "<br>";   

?>
