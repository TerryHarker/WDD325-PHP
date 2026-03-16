<?php
// Variable vorbereiten:
$hello = "Hello World!";
$hello .= " Es ist schon Abend"; 


// laravel herd: directory index?

// phpinfo();
?>
<html>
    <head>
        <title><?php echo $hello; ?></title>
    </head>
    <body>
        <h1 class="title"><?php echo $hello; ?></h1>
    </body>
</html>