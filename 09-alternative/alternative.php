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
        $pageTitle = 'PHP is amazing!';
    ?></pre>

    <?php 
        if (!empty($pageTitle)) {
            echo "<h1><span>{$pageTitle}</span></h1>";
        }
    ?>

    <?php if (!empty($pageTitle)) { ?>
        <h1>
            <span><?php echo $pageTitle; ?></span>
        </h1>
    <?php } ?>

    <!-- Alternative PHP -->
    <?php if (!empty($pageTitle)): ?>
        <h1>
            <span><?php echo $pageTitle; ?></span>
        </h1>
    <?php endif; ?>

</body>
</html>