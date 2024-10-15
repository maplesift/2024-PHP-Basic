<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>陣列測試練習</title>
</head>
<body>
<?php
$subject = ['', '國文', '英文', '數學', '地理', '歷史'];
$students = ['judy', 'amo', 'john', 'peter', 'hebe'];
$point = [
    [95, 64, 70, 90, 84],
    [88, 78, 54, 81, 71],
    [45, 60, 68, 70, 62],
    [59, 32, 77, 54, 42],
    [71, 62, 80, 62, 64]
];

// 開始生成 HTML 表格
echo '<table border="1">';
echo '<tr>';
foreach ($subject as $sub) {
    echo '<th>' . $sub . '</th>';
}
echo '</tr>';

foreach ($students as $index => $student) {
    echo '<tr>';
    echo '<td>' . $student . '</td>'; // 學生姓名
    foreach ($point[$index] as $score) {
        echo '<td>' . $score . '</td>'; // 學生分數
    }
    echo '</tr>';
}

echo '</table>';
?>
</body>
</html>

