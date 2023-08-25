function calculateIMC() {

    let weight = document.getElementById("weight").value;
    let height = document.getElementById("height").value;

    let imc = weight / (height * height);

    if (!weight && !height) {
        document.getElementById("resultadoIMC").innerHTML = `Parâmetros Incorretos!`;
    } else {
    
    if (imc < 18.50) {
        document.getElementById("resultadoIMC").innerHTML = 
        `Você está magro, cuide da sua saúde! ${imc.toFixed(2)}`;
    } else if (imc >= 18.5 && imc <= 24.9) {
        document.getElementById("resultadoIMC").innerHTML = 
        `Parabéns, sua massa corporal está normal! ${imc.toFixed(2)}`;
    } else if (imc >= 25 && imc <= 29.9) {
        document.getElementById("resultadoIMC").innerHTML = 
        `Você está com sobrepeso, cuide da sua alimentação! ${imc.toFixed(2)}`;
    } else if (imc >= 30 && imc <= 34.9) {
        document.getElementById("resultadoIMC").innerHTML = `Obesidade grau I ${imc.toFixed(2)}`;
    } else if (imc >= 35 && imc <= 39.9) {
        document.getElementById("resultadoIMC").innerHTML = `Obesidade grau II ${imc.toFixed(2)}`;
    } else if (imc >= 40) {
        document.getElementById("resultadoIMC").innerHTML = `Obesidade grau III ${imc.toFixed(2)}`;
        }
      }
    }