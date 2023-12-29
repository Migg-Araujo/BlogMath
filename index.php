<?php
    $url = ucfirst((isset($_GET['url'])) ? $_GET['url'] : 'home');
    if(!file_exists('pages/'.$url.'.php')) {
        $url = '404';
    }
    require_once 'config/config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Math Blog | <?php echo"$url"; ?></title>
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>css/style.css"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100&family=Poppins:wght@500&display=swap" rel="stylesheet">
    <link rel="icon" href="<?php echo INCLUDE_PATH; ?>src/icon.svg" type="image/x-icon">
</head>
<body>
    <?php
        // friendly url
        $url = (isset($_GET['url'])) ? $_GET['url'] : 'home';

        if(file_exists('pages/'.$url.'.php')) {
            include 'pages/'.$url.'.php';
        } else {
            include 'pages/404.php';
        }
    ?>
</body>
  <script src="<?php echo INCLUDE_PATH; ?>js/script.js"></script>
</html>