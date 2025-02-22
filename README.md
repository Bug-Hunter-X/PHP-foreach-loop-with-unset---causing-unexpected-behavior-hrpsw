# PHP foreach loop with unset() causing unexpected behavior

This repository demonstrates an uncommon bug in PHP related to using `unset()` within a `foreach` loop on an array.  The issue arises from the way `foreach` handles array iteration and modifications.  The code appears to correctly remove elements, but it will unexpectedly miss items under certain conditions.

## Bug Description
The bug occurs when attempting to remove elements from an array within a `foreach` loop using `unset()`. The `foreach` loop operates on a copy of the array's internal pointer, not the array itself. This results in unexpected behavior when multiple matching elements are present.

## Solution
The solution involves using other iteration methods, such as a `for` loop or `array_filter()` to correctly remove elements while avoiding the pitfalls of the `foreach` loop and `unset()` combination.