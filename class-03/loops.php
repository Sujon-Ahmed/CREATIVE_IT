<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // ? while loop
        /* $i = 1;
        while($i <= 10) {
            echo $i."<br>";
            $i++;
        } */

        // ? do while loop
       /*  $i = 1;
        do{
            echo "The number is $i <br>";
            $i++;
        }while($i <= 5); */

        // ? for loop
        /* for($i = 1; $i <= 5; $i++) {
            echo "The number is $i <br>";
        } */

        // ? foreach loop
        /* $colors = ['red', 'green', 'yellow', 'blue', 'orange'];
        foreach($colors as $item) {
            echo "$item <br>";
        } */

        // Associative Array with foreach loop
      /*   $person = ['Sujon' => 22, 'Riman' => 21];
        foreach($person as $name => $age) {
            echo "$name is $age years old.<br>";
        }
        */

        // ? Break / Continue

        for($i = 1; $i <= 10; $i++) {
            if($i == 4) {
                // break;
                // continue;
            }else {
                echo "$i <br>";
            }
        }

    ?>
    <!-- <div style="background-color: #ddd; padding: 20px">
        <table width="250" cellpadding="0" cellspacing="0" border="0" align="center"> 
            <?php for($row = 1; $row <= 8; $row++){ ?>
                <tr>
                    <?php for($col = 1; $col <= 8; $col++){
                        $total = $row + $col;
                        if($total%2 == 0) {
                            echo "<td width='20' height='20' bgcolor='#fff'></td>";
                        }else {
                            echo "<td width='20' height='20' bgcolor='#000'></td>";
                        }
                    } ?>
                </tr>
            <?php } ?>
        </table>
    </div> -->
</body>
</html>