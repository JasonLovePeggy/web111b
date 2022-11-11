<?php

$score = [101, 102, 104, 105, 106];

$iCount = count($score);
$iTotal = 0;
$Msg = "";

for ($i = 0; $i < $iCount; $i++) {
    //加總
    $iTotal = $iTotal + $score[$i];
    //文字連結
    $Msg = $Msg . $score[$i];
    if ($i == $iCount - 1) {
        $Msg = $Msg . "=";
    } else {
        $Msg = $Msg . "+";
    }

}

echo $Msg . $iTotal;