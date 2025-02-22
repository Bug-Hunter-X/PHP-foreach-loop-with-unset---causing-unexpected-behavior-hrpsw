//The correct way to remove elements from an array while iterating is to use a for loop, iterating backwards.
function foo(array $arr) {
    for ($i = count($arr) - 1; $i >= 0; $i--) {
        if ($arr[$i] === 'bar') {
            unset($arr[$i]);
        }
    }
    return $arr;
}

$arr = ['foo', 'bar', 'bar', 'baz'];
$result = foo($arr);
print_r($result); // Output: Array ( [0] => foo [3] => baz )

// Another solution using array_filter()
function foo2(array $arr): array {
    return array_filter($arr, fn($value) => $value !== 'bar');
}

$arr = ['foo', 'bar', 'bar', 'baz'];
$result = foo2($arr);
print_r($result); // Output: Array ( [0] => foo [3] => baz )