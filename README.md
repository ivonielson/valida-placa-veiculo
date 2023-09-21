✨ <h1>Validador de Placas de Veículos</h1> ✨

Neste repositório temos dois coigos com a mesma finalidade, validação de placa de veiculos, um feito em PHP e outro em JavaScript, onde contem uma função chamada validarPlaca que verifica se uma placa de veículo é válida. A função utiliza expressões regulares para avaliar diferentes padrões de placas, incluindo o formato atual com três letras seguidas de quatro números, bem como o padrão Mercosul para carros e motos.

ℹ️ Para utilizar, basta chamar a função validarPlaca e passar a placa que deseja verificar como argumento.

🚀 <h2>Exemplos de Uso:</h2>

<h3>php</h3>
echo validarPlaca("ABC1234")  . "<br>";  // Placa válida no formato atual
echo validarPlaca("ABC12356") . "<br>";  // Placa inválida
echo validarPlaca("ABC1D01")  . "<br>";  // Placa válida (padrão Mercosul - carro)

<h3>JavaScript</h3>
console.log(validarPlaca("ABC12D5"));    // Placa válida no formato atual<br>
console.log(validarPlaca("ABC1D15"));    // Placa inválida<br>
console.log(validarPlaca("OXM1G01"));    // Placa válida (padrão Mercosul - carro)<br>
