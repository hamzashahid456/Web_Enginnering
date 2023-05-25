<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <div>
        <table>
        <tr>
        </tr>
    </div>
    
    <?php

        // Define the dimensions of the board
        $size = 8;
        
        // Loop through each row
        for ($row = 1; $row <= $size; $row++) {
        
          // Loop through each column in the row
          for ($col = 1; $col <= $size; $col++) {
        
            // Determine the color of the tile based on its position
            if (($row + $col) % 2 == 0) {
              echo "<th style='background-color: black; width: 50px; height: 50px; display: inline-block;'></th>";
            } else {
              echo "<th style='background-color: white; width: 50px; height: 50px; display: inline-block;'></th>";
            }
          }
        
          // Start a new row
          echo "<br>";
        }
        
    
    ?>
    </table>

</body>
</html>