<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>perkalian kelipatan 2</title>
    <style>
        tr,th,td{
            border:1px solid;
        }

        table{
            text-align:center;
            background-color:grey;
        }
        *{
            background-color:grey;
        }
    </style>
</head>
<body>
    

    <table style="width:20%">
        <thead>
            <tr>
                <th>nilai</th>
                <th>hasil</th>
            </tr>
        </thead>
    
    <?php
    for($i = 2 ; $i <= 100 ; $i=$i + 2)
    {
        $hasil = $i * $i;
        echo "<tr>";
        echo "<td> $i x $i </td>";
        echo "<td> $hasil </td>";
        echo "</tr>";


    }

    ?>
</table>

</body>
</html>