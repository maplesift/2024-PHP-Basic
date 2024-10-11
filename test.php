<h1>將”aaddw1123”改成”*********”</h1>
<?php
$a = "aaddw1123";
$maskedString = str_repeat('*', strlen($a));
echo $maskedString;  // 输出: *********


echo '<div style="text-align: center;">正三角形<br></div>';
for($i=0; $i<5; $i++) {
    echo '<div style="text-align: center;">';
    for($j=0; $j<(2*$i+1); $j++) {
        echo "*";
    }
    echo '</div>';
}
?>
<h1>test</h1>
<?php
echo '<div style="text-align: center;">菱型<br></div>';

$rows = 5; // 設置菱型的行數

for ($i = 0; $i < $rows * 2 - 1; $i++) {
    // 計算當前行數
    $currentRow = $i < $rows ? $i : $rows * 2 - 2 - $i;
    
    $line = str_repeat("&nbsp;", $rows - 1 - $currentRow); // 輸出前導空格
    $line .= str_repeat("*", 2 * $currentRow + 1); // 輸出星號
    
    echo "<div style='text-align: center;'>$line</div>"; // 顯示行
}
?>
