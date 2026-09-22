<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="Author" content="Andy Nguyen">
    <meta name="keywords" content="PHP, Arrays">
    <meta name="description" content="A simple PHP page demonstrating arrays">
    <title>Using PHP Arrays</title>
</head>

<body>
    <h1>PHP Arrays</h1>
<?php

$days = ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"];

for ($i = 0; $i < count($days); $i++) {
    echo "<p>$days[$i]</p>";
}

?>


</body>

</html>