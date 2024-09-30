<?php
    include './functions.php';
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP Strong Password Generator</title>
    </head>
    <body>
        <h1>
            PHP Strong Password Generator
        </h1>
        <hr>
        <form method="GET">
            <label for="user_length">Scegli il numero di caratteri</label>
            <input type="number" id="user_length" name="user_length" min="5" max="25">
        </form>
        
        <div>
            La tua password è:
            <?php 
                if ($userLength != null) {
                    echo generateRandomString($userLength);
                }
                 
            
            ?>
        </div>
        
        
    </body>
</html>