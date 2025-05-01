<?php 


require_once './functions.php'



?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Records</title>
</head>
<body>
    <div class="container">
    
        <?php 
        foreach($records as $record){
            echo "<div class = card>$record[title] <br> 
            $record[author] <br>
            <img src=$record[cover] alt=$record[title]> <br>
            $record[date] <br>
            $record[genre]</div>";
        }
    
    
    
    ?>
    <img src="" alt="">
    
    </div>
</body>
</html>