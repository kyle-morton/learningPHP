<?php
    $name = htmlspecialchars($_POST['name']);
    $age = (int)$_POST['age'];
?>
<html>
    <head>
        <title>Sample form action...</title>
    </head>
    <body>
        <?php echo 'Using stored variables...'; ?>
        <br>
        Hi <?php echo $name; ?>.
        You are <?php echo $age; ?> years old.
    </body>
</html>


