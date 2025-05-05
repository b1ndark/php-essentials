<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Document</title>
</head>
<body>
    <pre>
        <?php 

        echo '<br />';

        $greeting = "I'm learning PHP!";
        echo "{$greeting}_!";

        echo '<br />';

        $name = 'John';
        $subject = 'PHP';

        echo "I'm {$name} and I'm learning {$subject}.";

        echo "\n";

        echo "\t";

        ?>
    </pre>

    <p>Hello World. <?php echo '<br />'; ?> Welcome!</p>
    <p>Hello world. <?php echo "\n"; ?> Welcome!</p>

    <p><?php echo 'My last echo, $abc'; ?></p>
    <p><?php echo "My last echo, {$abc}"; ?></p>
    
</body>
</html>