<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CuidaDoso</title>
    <link rel="stylesheet" href="styles/styles.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div><?php include('menu.php'); ?></div>
    <div class="container">
        <?php include($page_content); ?>
    </div>
    <div><?php include('rodape.php'); ?></div>
    <script src="scripts.js"></script>
</body>
</html>