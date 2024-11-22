<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicios de Lógica en PHP</title>
    <style>
        
    </style>
</head>
<body>
    <h1>Ejercicios de Lógica en PHP</h1>

    <!-- Ejercicio 1: Lista Invertida -->
    <h2>1. Lista Invertida</h2>
    <form method="post" action="">
        <label for="lista">Ingrese una lista de números (separados por comas):</label>
        <input type="text" id="lista" name="lista" required>
        <input type="submit" name="ejercicio" value="Invertir Lista">
    </form>
    <?php
    if (isset($_POST['ejercicio']) && $_POST['ejercicio'] == 'Invertir Lista') {
        $numeros = explode(',', $_POST['lista']);
        $numerosInvertidos = array_reverse($numeros);
        echo "<h3>Resultado:</h3>";
        echo implode(', ', $numerosInvertidos);
    }
    ?>

    <!-- Ejercicio 2: Suma de Números Pares -->
    <h2>2. Suma de Números Pares</h2>
    <form method="post" action="">
        <label for="numeros">Ingrese una lista de números (separados por comas):</label>
        <input type="text" id="numeros" name="numeros" required>
        <input type="submit" name="ejercicio" value="Sumar Pares">
    </form>
    <?php
    if (isset($_POST['ejercicio']) && $_POST['ejercicio'] == 'Sumar Pares') {
        $numeros = explode(',', $_POST['numeros']);
        $suma = 0;
        foreach ($numeros as $numero) {
            if ($numero % 2 == 0) {
                $suma += $numero;
            }
        }
        echo "<h3>Resultado:</h3>";
        echo "La suma de los números pares es: $suma";
    }
    ?>

    <!-- Ejercicio 3: Frecuencia de Caracteres -->
    <h2>3. Frecuencia de Caracteres</h2>
    <form method="post" action="">
        <label for="cadena">Ingrese una cadena de texto:</label>
        <input type="text" id="cadena" name="cadena" required>
        <input type="submit" name="ejercicio" value="Contar Frecuencia">
    </form>
    <?php
    if (isset($_POST['ejercicio']) && $_POST['ejercicio'] == 'Contar Frecuencia') {
        $cadena = $_POST['cadena'];
        $frecuencia = [];
        $cadena = str_replace(' ', '', $cadena); // Eliminar espacios

        foreach (str_split($cadena) as $caracter) {
            if (isset($frecuencia[$caracter])) {
                $frecuencia[$caracter]++;
            } else {
                $frecuencia[$caracter] = 1;
            }
        }

        echo "<h3>Resultado:</h3>";
        echo "<pre>";
        print_r($frecuencia);
        echo "</pre>";
    }
    ?>

    <!-- Ejercicio 4: Bucle Anidado -->
    <h2>4. Bucle Anidado (Pirámide de Asteriscos)</h2>
    <form method="post" action="">
        <label for="filas">Ingrese el número de filas:</label>
        <input type="number" id="filas" name="filas" min="1" required>
        <input type="submit" name="ejercicio" value="Imprimir Pirámide">
    </form>
    <?php
    if (isset($_POST['ejercicio']) && $_POST['ejercicio'] == 'Imprimir Pirámide') {
        $filas = (int)$_POST['filas'];
        echo "<h3>Resultado:</h3>";
        for ($i = 1; $i <= $filas; $i++) {
            // Imprimir espacios
            for ($j = $i; $j < $filas; $j++) {
                echo "&nbsp;"; // Espacio en blanco
            }
            // Imprimir asteriscos
            for ($k = 1; $k <= (2 * $i - 1); $k++) {
                echo "*";
            }
            echo "<br>"; // Nueva línea
        }
        echo "</div>"; // Cierra el div
    }
    ?>
</body>
</html>