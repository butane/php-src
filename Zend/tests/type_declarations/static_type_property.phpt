--TEST--
Static type is not allowed in properties
--FILE--
<?php

// Testing ?static here, to avoid ambiguity with static properties.
class Test {
    public ?static $foo;
}

?>
--EXPECTF--
Parse error: syntax error, unexpected 'static' (T_STATIC) in %s on line %d
