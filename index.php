<?php
$resultado = 0;
$num1 = '';
$num2 = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $num1 = (float) $_POST['num1'];
    $num2 = (float) $_POST['num2'];
    $boton = $_POST['operacion'] ?? '';

    switch ($boton) {
        case 'suma':
            $resultado = $num1 + $num2;
            break;
            
        case 'resta':
            $resultado = $num1 - $num2;
            break;

        case 'multiplicacion':
            $resultado = $num1 * $num2;
            break;

        case 'division':
            if ($num2 != 0) {
                $resultado = $num1 / $num2;
            } else {
                $resultado = "Error: Div / 0";
            }
            break;

        case 'potencia':
            $resultado = pow($num1, $num2);
            break;

        case 'modulo':
            if ($num2 != 0) {
                $resultado = $num1 % $num2;
            } else {
                $resultado = "Error: Mod / 0";
            }
            break;  }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operaciones básicas</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <div class="container">
        <h1>Operaciones básicas</h1>

        <form method="POST" action="">
            
            <div class="form-group">
                <label for="num1">Primer número</label>
                <input type="number" step="any" id="num1" name="num1" value="<?php echo $num1; ?>" required>
            </div>

            <div class="form-group">
                <label for="num2">Segundo número</label>
                <input type="number" step="any" id="num2" name="num2" value="<?php echo $num2; ?>" required>
            </div>

            <div class="form-group">
                <label for="resultado">Resultado</label>
                <input type="text" id="resultado" name="resultado" value="<?php echo $resultado; ?>" readonly>
            </div>

            <div class="buttons-container">
                <button type="submit" name="operacion" value="suma" class="btn btn-blue">Suma</button>
                <button type="submit" name="operacion" value="resta" class="btn btn-yellow">Resta</button>
                <button type="submit" name="operacion" value="multiplicacion" class="btn btn-blue">Multiplicación</button>
                <button type="submit" name="operacion" value="division" class="btn btn-yellow">División</button>
                <button type="submit" name="operacion" value="potencia" class="btn btn-blue">Potencia</button>
                <button type="submit" name="operacion" value="modulo" class="btn btn-yellow">Módulo</button>
            </div>

        </form>
    </div>

</body>
</html>
