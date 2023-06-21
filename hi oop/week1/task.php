<?php
//task01
function getUniqueElements($arr) {
    $uniqueArr = array();
    foreach ($arr as $element) {
      if (!in_array($element, $uniqueArr)) {
        array_push($uniqueArr, $element);
      }
    }
    return $uniqueArr;
  }
  $arr = array(1, 2, 3, 2, 4, 5, 5, 6);
$uniqueArr = getUniqueElements($arr);
print_r($uniqueArr); // Output: Array ( [0]=>1 [1]=>2 [2]=>3 [4]=>4 [5]=>5 [7]=>6 )
//task02
function searchElement($arr, $element) {
    foreach ($arr as $value) {
      if ($value === $element) {
        return true;
      }
    }
    return false;
  }
  $arr = array(1, 2, 3, 4, 5);
if (searchElement($arr, 3)) {
  echo "TRUE";
} else {
  echo "FALSE";
}
