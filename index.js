function validarPlaca(placa){
    var resposta = "placa inválida";

    // Expressão Regular para o formato atual de placa (três letras seguidas de quatro números)
    const regexPlaca = /^[a-zA-Z]{3}[0-9]{4}$/;

    // Expressão Regular para o padrão Mercosul de placa de carro
    // (três letras seguidas de um número, uma letra, e dois números)
    const regexPlacaMercosulCarro = /^[a-zA-Z]{3}[0-9]{1}[a-zA-Z]{1}[0-9]{2}$/;

    // Expressão Regular para o padrão Mercosul de placa de moto
    // (três letras seguidas de dois números, uma letra, e um número)
    const regexPlacaMercosulMoto = /^[a-zA-Z]{3}[0-9]{2}[a-zA-Z]{1}[0-9]{1}$/;

    if(regexPlaca.test(placa)){
        resposta = "Placa válida no formato atual";
    }
    if(regexPlacaMercosulCarro.test(placa)){
        resposta = "Placa válida (padrão Mercosul - carro)";
    }
    if(regexPlacaMercosulMoto.test(placa)){
        resposta = "Placa válida (padrão Mercosul - moto)";
    }

    return resposta;
}

// Exemplos de uso
console.log(validarPlaca("ABC1234"));
console.log(validarPlaca("ABC12356"));
console.log(validarPlaca("ABC12D5"));
console.log(validarPlaca("ABC1D15"));
console.log(validarPlaca("OXM1G01"));
