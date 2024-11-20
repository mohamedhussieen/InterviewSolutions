<?php
function findIndexToReplace($arr) {
    $maxLength = 0;
    $maxIndex = -1;
    $zeroCount = 0;
    $left = 0;

    for ($right = 0; $right < count($arr); $right++) {
        if ($arr[$right] == 0) $zeroCount++;
        while ($zeroCount > 1) {
            if ($arr[$left] == 0) $zeroCount--;
            $left++;
        }
        if ($right - $left + 1 > $maxLength) {
            $maxLength = $right - $left + 1;
            $maxIndex = $arr[$right] == 0 ? $right : $maxIndex;
        }
    }
    return $maxIndex;
}
// Example input
$binaryArray = [0, 0, 1, 0, 1, 1, 1, 0, 1, 1];
$result = findIndexToReplace($binaryArray);
echo "Index to replace: " . $result;
?>
