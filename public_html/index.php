<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Test Lamp Stack</title>
    </head>
    <body>
        <h1>
            <?php
            $link = mysqli_connect("mysql", "dbtest", "password", null);

            if (!$link) {
                echo "Unable to connect!!" . PHP_EOL;
                echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
                exit;
            } else {
                echo "Success: A proper connection to MySQL was made!" . PHP_EOL;
                echo "Host information: " . mysqli_get_host_info($link) . PHP_EOL;
            }
            mysqli_close($link);
            ?>
        </h1>
    </body>
</html>
