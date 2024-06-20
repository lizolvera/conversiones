
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversiones de Decimal a Binario, Octal, Hexadecimal Practica 2</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
    <h2>Conversiones de Decimal a Binario, Octal, Hexadecimal Practica 2</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
       <b> <label for="numero">Ingrese un número decimal:</label> </b>
        <input type="text" id="numero" name="numero">
        <br><br>
        <b> <label for="opcion">Seleccione la base a la que desea convertir:</label> </b>
        <select id="opcion" name="opcion">
            <option value="binario">Binario</option>
            <option value="octal">Octal</option>
            <option value="hexadecimal">Hexadecimal</option>
        </select>
        <br><br>
        <input type="submit" value="Convertir">
    </form>
    <br>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
        
        $numero = $_POST["numero"];
        $opcion = $_POST["opcion"];

       
        if (!is_numeric($numero)) 
        {
            echo "<p> ingrese un número válido.</p>";
        }
            else 
            {
            
                $numero_entero = intval($numero);

            
                switch ($opcion) 
                {
                    case "binario":
                        $resultado = decbin($numero_entero);
                        echo "<p>El número decimal $numero_entero en binario es: $resultado</p>";
                    break;
                    case "octal":
                        $resultado = decoct($numero_entero);
                        echo "<p>El número decimal $numero_entero en octal es: $resultado</p>";
                    break;
                    case "hexadecimal":
                        $resultado = dechex($numero_entero);
                        echo "<p>El número decimal $numero_entero en hexadecimal es: $resultado</p>";
                    break;
                    default:
                        echo "<p>Seleccione una opción válida.</p>";
                    break;
                }
            }
    }
    ?>

</body>
</html>
