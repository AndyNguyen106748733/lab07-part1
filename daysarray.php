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
echo "<p>The days of the week in English are: </p>";
echo "<p>";
for ($i = 0; $i < count($days); $i++) {
    if ($i == count($days) - 1) {
        echo "$days[$i].";
        break;
    }
    echo "$days[$i], ";
}
echo "</p>";


$days = ["Dimanche", "Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi"];
echo "<p>The days of the week in French are: </p>";
echo "<p>";
for ($i = 0; $i < count($days); $i++) {
    if ($i == count($days) - 1) {
        echo "$days[$i].";
        break;
    }
    
    echo "$days[$i], ";
}
echo "</p>";

?>


</body>

</html>