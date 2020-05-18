<html>
<head>
<title>Tugas 1</title>
<body>
    <table border="5" cellpadding="20" cellspacing = "5">
        <?php for ($i = 1; $i < 6; $i++)
        {
            echo "<tr>";
            for ($j = 1; $j < 6; $j++)
            {
                if(($i % 2 == 0 && $j % 2 == 0) || ($i % 2 == 1 && $j % 2 == 1))
                {
                    echo '<td bgcolor = lightblue></td>';
                }
                else {
                    echo '<td bgcolor=salmon></td>';
                }
            }
            echo "</tr>";
        }    
        ?>
    </table>
</body>















</head>
</html>