--TEST--
Test array_walk() function : usage variations - buit-in function as callback
--FILE--
<?php
/* Prototype  : bool array_walk(array $input, string $funcname [, mixed $userdata])
 * Description: Apply a user function to every member of an array
 * Source code: ext/standard/array.c
*/

/*
 * Passing different buit-in functionns as callback function
 *    pow function
 *    min function
 *    echo language construct
*/

echo "*** Testing array_walk() : built-in function as callback ***\n";

$input = array(2 => 1, 65, 98, 100, 6 => -4);

echo "-- With 'pow' built-in function --\n";
var_dump( array_walk($input, 'pow'));

echo "-- With 'min' built-in function --\n";
var_dump( array_walk($input, "min"));

echo "-- With 'echo' language construct --\n";
try {
    var_dump( array_walk($input, "echo"));
} catch (TypeError $e) {
    echo $e->getMessage(), "\n";
}

echo "Done"
?>
--EXPECT--
*** Testing array_walk() : built-in function as callback ***
-- With 'pow' built-in function --
bool(true)
-- With 'min' built-in function --
bool(true)
-- With 'echo' language construct --
array_walk() expects argument #2 ($funcname) to be a valid callback, function 'echo' not found or invalid function name
Done
