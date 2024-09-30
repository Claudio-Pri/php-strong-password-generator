<?php
    $userLength = $_GET['user_length'];

    //funzione da stack overflow
    function generateRandomString($length) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
    
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[random_int(0, $charactersLength - 1)];
        }
    
        return $randomString;
    }
    // var_dump(generateRandomString($length = 30));
    // var_dump($userLength);
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