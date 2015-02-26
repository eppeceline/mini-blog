<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
    </head>
    <body>
        <h1><?php echo $data['data']['page_title']; ?></h1>
        <?php include($data['view']); ?>
    </body>
</html>