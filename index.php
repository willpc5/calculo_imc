<html>
<head>
    <meta charset="UTF-8" />
    <title>Calculadora de IMC</title>

    <link rel="stylesheet" type="text/css" href="estilo.css" />
</head>
<body>

    <div class="texto">
        <h1>Calculadora de IMC - V - 1.0</h1>
    </div>

    <div class="formulario">
        <div class="areaform">
            <form method="POST" action="recebedor.php">

                <h2>Informe seu peso(kg)</h2>
                
                <input type="text" name="peso" placeholder="Peso EX: 62"  />
            
                <h2>Informe sua altura(metro e cm)</h2>
            
                <input type="text" name="altura" placeholder="Altura EX: 1.70 - Utilize ponto" /><br/><br/>
                
                <div class="botao">
                    <input type="submit" value="Calcular" />
                </div>

            </form>
        </div>
    </div>

</body>
</html>