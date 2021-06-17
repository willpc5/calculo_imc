function calcularIMC() {
    let peso = document.getElementById("peso").value;
    let altura = document.getElementById("altura").value;

    let imc = altura * altura;

    let calculo = (peso / imc).toFixed(2);

    document.getElementById("resultadoIMC").innerHTML = "IMC: " + calculo;
}