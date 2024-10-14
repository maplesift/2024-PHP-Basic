<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>array陣列</title>
</head>
<style>
    
</style>
<body>
    <h1>陣列宣告</h1>
<?php
    $subject=['','國文','英文','數學','地理','歷史'];
    $students=['judy','amo','john','peter','hebe'];
    $point=[[95,64,70,90,84],[88,78,54,81,71],[45,60,68,70,62],[59,32,77,54,42],[71,62,80,62,64]];
    
    
?><tr>
<?php
    foreach ($subject as  $value) {
        echo "<td>{$value}</td>";
    }
?>
</tr>
<td>
<?php
    foreach($students as $value){
        echo "<tr>{$value}</tr>";
    }
?>
</td>
</body>
</html>