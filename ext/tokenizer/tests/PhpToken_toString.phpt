--TEST--
PhpToken implements __toString()
--FILE--
<?php

$tokens = PhpToken::getAll('<?php echo "Hello ". $what;');
var_dump(implode($tokens));

var_dump($tokens[0] instanceof Stringable);
var_dump((string) $tokens[0]);
var_dump($tokens[0]->__toString());

?>
--EXPECT--
string(27) "<?php echo "Hello ". $what;"
bool(true)
string(6) "<?php "
string(6) "<?php "
