<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
    <style>
        body {
       background-image: url(https://wallpapers.com/images/hd/hello-kitty-pc-uoaytfzu54x4f6e9.jpg);
            font-family: Arial, sans-serif;
            text-align: center;
        }
        .container {
            
            background-color: rgb(255, 181, 209);
            color: #;
            max-width: 300px;
            margin: 50px auto;
            padding: 20px;
            border: 5px solid #fff;
            border-radius: 30px;
           
            box-shadow: 10px 10px 10px rgb(0, 0, 0);
        }
        input {
            width: 90%;
            margin: 5px 0;
            padding: 10px;
        }
        select{
            border: 10px;
             width: 50%;
            margin: 5px 0;
            padding: 10px;
        }
        button{
             width: 60%;
            margin: 5px 0;
            padding: 10px;

        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Calculadora</h2>
        <form method="post">
            <input type="number" name="num1" placeholder="Digite o primeiro número" required>
            <input type="number" name="num2" placeholder="Digite o segundo número" required>
            <select name="operacao">
                <option value="soma">+</option>
                <option value="subtracao">-</option>
                <option value="multiplicacao">*</option>
                <option value="divisao">/</option>
            </select>
            <button type="submit">Calcular</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $num1 = $_POST["num1"];
            $num2 = $_POST["num2"];
            $operacao = $_POST["operacao"];
            $resultado = 0;

            switch ($operacao) {
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
                        echo "<p style='color: red;'>Erro: Divisão por zero!</p>";
                        exit;
                    }
                    break;
            }
            echo "<h3>Resultado: $resultado</h3>";
        }
        ?>
    </div>
</body>
</html>