<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>laboratorio 1.6</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    <?php 
        define('TAM',4);
        function potencia($v1, $v2)
        {
            $rdo = pow($v1,$v2);
            return $rdo;
        }

        echo "<table border=1>";
        for ($n1=1; $n1<=TAM; $n1++)
        {
            echo"<tr>";
            for ($n2=1; $n2<=TAM; $n2++)
            echo "<td>". potencia($n1,$n2). "</td>";
            echo "</tr>";
        }
    echo "</table>";
    ?>
</body>
</html>