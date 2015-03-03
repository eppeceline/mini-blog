<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
    </head>
    <body>
        <h1><?php echo $data['data']['page_title']; ?></h1>
        <?php if (isset($_SESSION['connected'])): ?>
                <div><a href="<?php echo $_SERVER['PHP_SELF']; ?>?a=disconnect&e=user"><?php echo $_SESSION['user']; ?></a></div>
        <?php else: ?>
                <div><a href="<?php echo $_SERVER['PHP_SELF']; ?>?a=collect&e=user">Identifiez-vous.</a></div></div>
        <?php endif; ?>
        <?php include($data['view']); ?>
    </body>
</html>