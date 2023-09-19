<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>laboratorio 1.4</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    <?php 
        echo "<table border=1>";
        $n=1;
        for ($n1=1; $n1<=10; $n1++)
        {
            echo "<tr>";
            for ($n2=1; $n2<=10; $n2++)
            {
                echo "<td>", $n, "</td>";
                $n = $n + 1;
            }
        echo "</tr>";
        }
    echo "</table>"
    ?>
</body>
</html>