<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="Author" content="Andy Nguyen">
    <meta name="keywords" content="PHP, variables, arrays, operators">
    <meta name="description" content="A simple PHP page demonstrating variables, arrays, and operators">
    <title>Using PHP variable, arrays and operators</title>
</head>

<body>
    <h1>PHP variables, arrays and operators</h1>
<?php

$marks = [85,85,95];
$marks[1] = 90;
$ave = 0;
for ($i = 0; $i < count($marks); $i++) {
    $ave += $marks[$i];
}
$ave /= count($marks);
if ($ave >= 50) {
    $status = "PASSED";
} else {
    $status = "FAILED";
}
echo "<p>The average score is $ave. You $status.</p>";

?>


</body>

</html>