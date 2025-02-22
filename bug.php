function foo(array $arr) {
  foreach ($arr as $key => $value) {
    if ($value === 'bar') {
      unset($arr[$key]);
    }
  }
  return $arr;
}

$arr = ['foo', 'bar', 'baz'];
$result = foo($arr);
print_r($result); // Output: Array ( [0] => foo [2] => baz )

$arr = ['foo', 'bar', 'bar', 'baz'];
$result = foo($arr);
print_r($result); // Output: Array ( [0] => foo [3] => baz )

//The problem is that the foreach loop iterates over a copy of the array, not the original array. Therefore, when you unset an element, it only removes it from the copy, and not from the original array. 
// The code works incorrectly when there are multiple 'bar' values in the array. The first 'bar' is removed, but the second is not.
