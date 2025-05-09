<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .calculadora {
            background: #fff;
            padding: 20px 30px;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0,0,0,0.1);
            width: 300px;
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        input, select {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        .resultado {
            text-align: center;
            margin-top: 15px;
            font-size: 18px;
            color: #333;
        }
        button {
            background-color: #28a745;
            color: white;
            border: none;
            padding: 12px;
            border-radius: 5px;
            width: 100%;
            cursor: pointer;
        }
        button:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>
    <div class="calculadora">
        <h2>Calculadora PHP</h2>
        <form method="post">
            <input type="number" name="num1" step="any" placeholder="Digite o primeiro número" required>
            <input type="number" name="num2" step="any" placeholder="Digite o segundo número" required>
            <select name="operador" required>
                <option value="">Selecione uma operação</option>
                <option value="soma">Soma (+)</option>
                <option value="subtracao">Subtração (-)</option>
                <option value="multiplicacao">Multiplicação (×)</option>
                <option value="divisao">Divisão (÷)</option>
            </select>
            <button type="submit">Calcular</button>
        </form>

        <div class="resultado">
            <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $num1 = floatval($_POST["num1"]);
                    $num2 = floatval($_POST["num2"]);
                    $operador = $_POST["operador"];
                    $resultado = "";

                    switch ($operador) {
                        case "soma":
                            $resultado = $num1 + $num2;
                            break;
                        case "subtracao":
                            $resultado = $num1 - $num2;
                            break;
                        case "multiplicacao":
                            $resultado = $num1 * $num2;
                            break;
                        case "divisao":
                            if ($num2 != 0) {
                                $resultado = $num1 / $num2;
                            } else {
                                $resultado = "Erro: divisão por zero!";
                            }
                            break;
                        default:
                            $resultado = "Operação inválida.";
                    }

                    echo "<strong>Resultado: </strong>" . $resultado;
                }
            ?>
        </div>
    </div>
</body>
</html>
