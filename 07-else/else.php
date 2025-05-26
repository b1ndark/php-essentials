<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../style/style.css">
    <title>Document</title>
</head>
<body>
    <pre><?php
        
        include 'vars.php';


        if ($serverStatus === 'ok') {
            echo "\n----\n";
            echo 'Welcome World!';
        }

        else if ($serverStatus === 'error') {
            echo "\n----\n";
            echo 'Sorry for any inconvenience. Please call 0888888888';
            echo "\n----\n";
        }

        else {
            echo "\n----\n";
            echo 'We\'re currently undergoing maintenance. Please check back later';
        }

    
    ?></pre>
</body>
</html>