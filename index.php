<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Test page</title>
</head>
<body>
    <h1>Site name</h1>
    <p>Hello world!</p>
    <?php
        echo 'it`s a Darren Sundown';
        while ($x < 10) {
            microphone($x);
        }
        function microphone($x) {
            echo $x;
        }
        echo 'One more try';
    ?>
</body>
</html>