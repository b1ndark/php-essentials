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
        $meaning = 42;
        echo ($meaning * 42) . "\n";
        echo ($meaning / 42) . "\n";
        echo ($meaning + 42) . "\n";
        echo ($meaning - 42) . "\n";
        echo ($meaning * 2) . "\n";

        // echo '5' + '6a';
        // echo round(3.3333333, 1);
        $meaning *= 2;
        $meaning /= 2;
        $meaning += 2;
        $meaning -= 2;
        echo $meaning;
    ?></pre>
</body>
</html>