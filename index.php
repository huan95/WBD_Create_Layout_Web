<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Using include in php</title>
    <link rel="stylesheet" type="text/css" href="Style.css">
</head>
<body>

<div class="container">

    <header>
        <?php
//        include 'header.php';
        require 'header.php';
        ?>
    </header>

    <nav>
        <?php
//        include 'nav.php';
        require 'nav.php';
        ?>
    </nav>

    <article>
        <?php
//        include 'content.php';
        require 'content.php';
        ?>
    </article>

    <footer>
        <?php
//        include 'footer.php';
        require 'footer.php';
        ?>
    </footer>
</div>


</body>
</html>