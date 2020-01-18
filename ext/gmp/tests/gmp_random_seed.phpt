--TEST--
gmp_random_seed() basic tests
--SKIPIF--
<?php if (!extension_loaded("gmp")) print "skip"; ?>
<?php if (PHP_INT_SIZE != 8) die("skip this test is for 64bit platform only"); ?>
--FILE--
<?php

// zero int
var_dump(gmp_random_seed(0));

var_dump(gmp_strval(gmp_random_bits(10)));
var_dump(gmp_strval(gmp_random_bits(100)));
var_dump(gmp_strval(gmp_random_bits(1000)));

var_dump(gmp_strval(gmp_random_range(0, 10000)));
var_dump(gmp_strval(gmp_random_range(-10000, 10000)));
var_dump(gmp_strval(gmp_random_range(-10000, 0)));


// zero gmp
var_dump(gmp_random_seed(gmp_init(0)));

var_dump(gmp_strval(gmp_random_bits(10)));
var_dump(gmp_strval(gmp_random_bits(100)));
var_dump(gmp_strval(gmp_random_bits(1000)));

var_dump(gmp_strval(gmp_random_range(0, 10000)));
var_dump(gmp_strval(gmp_random_range(-10000, 10000)));
var_dump(gmp_strval(gmp_random_range(-10000, 0)));


// negative int
var_dump(gmp_random_seed(-100));

var_dump(gmp_strval(gmp_random_bits(10)));
var_dump(gmp_strval(gmp_random_bits(100)));
var_dump(gmp_strval(gmp_random_bits(1000)));

var_dump(gmp_strval(gmp_random_range(0, 10000)));
var_dump(gmp_strval(gmp_random_range(-10000, 10000)));
var_dump(gmp_strval(gmp_random_range(-10000, 0)));


// negative gmp
var_dump(gmp_random_seed(gmp_init(-100)));

var_dump(gmp_strval(gmp_random_bits(10)));
var_dump(gmp_strval(gmp_random_bits(100)));
var_dump(gmp_strval(gmp_random_bits(1000)));

var_dump(gmp_strval(gmp_random_range(0, 10000)));
var_dump(gmp_strval(gmp_random_range(-10000, 10000)));
var_dump(gmp_strval(gmp_random_range(-10000, 0)));


// positive int
var_dump(gmp_random_seed(100));

var_dump(gmp_strval(gmp_random_bits(10)));
var_dump(gmp_strval(gmp_random_bits(100)));
var_dump(gmp_strval(gmp_random_bits(1000)));

var_dump(gmp_strval(gmp_random_range(0, 10000)));
var_dump(gmp_strval(gmp_random_range(-10000, 10000)));
var_dump(gmp_strval(gmp_random_range(-10000, 0)));


// positive gmp
var_dump(gmp_random_seed(100));

var_dump(gmp_strval(gmp_random_bits(10)));
var_dump(gmp_strval(gmp_random_bits(100)));
var_dump(gmp_strval(gmp_random_bits(1000)));

var_dump(gmp_strval(gmp_random_range(0, 10000)));
var_dump(gmp_strval(gmp_random_range(-10000, 10000)));
var_dump(gmp_strval(gmp_random_range(-10000, 0)));


$seed = gmp_init(1);
$seed <<= 512;

// large negative gmp
var_dump(gmp_random_seed($seed * -1));

var_dump(gmp_strval(gmp_random_bits(10)));
var_dump(gmp_strval(gmp_random_bits(100)));
var_dump(gmp_strval(gmp_random_bits(1000)));

var_dump(gmp_strval(gmp_random_range(0, 10000)));
var_dump(gmp_strval(gmp_random_range(-10000, 10000)));
var_dump(gmp_strval(gmp_random_range(-10000, 0)));


// large positive gmp
var_dump(gmp_random_seed($seed));

var_dump(gmp_strval(gmp_random_bits(10)));
var_dump(gmp_strval(gmp_random_bits(100)));
var_dump(gmp_strval(gmp_random_bits(1000)));

var_dump(gmp_strval(gmp_random_range(0, 10000)));
var_dump(gmp_strval(gmp_random_range(-10000, 10000)));
var_dump(gmp_strval(gmp_random_range(-10000, 0)));


// standard non conversion error
var_dump(gmp_random_seed('not a number'));


echo "Done\n";
?>
--EXPECTF--
NULL
string(3) "107"
string(30) "576055025228722307492589900056"
string(301) "5075491613651149525976453192895895253653438900772590630831858908690082668789318258254821002217677675804439098856210618572534955562143303188483908287009522532300439665975877709754914215718998849272363858786685187951932478210775857465448084868199807983919191214972626993925394176279001074206804955195464"
string(4) "4098"
string(3) "866"
string(5) "-4602"
NULL
string(3) "107"
string(30) "576055025228722307492589900056"
string(301) "5075491613651149525976453192895895253653438900772590630831858908690082668789318258254821002217677675804439098856210618572534955562143303188483908287009522532300439665975877709754914215718998849272363858786685187951932478210775857465448084868199807983919191214972626993925394176279001074206804955195464"
string(4) "4098"
string(3) "866"
string(5) "-4602"
NULL
string(3) "800"
string(30) "136797365759249926716355081555"
string(300) "983682312243221532860194306859606025979259367996304596374614332718375645173854152266611727577102182844028492473112400528817154210713755887896949560718745264129216953815968005630126359941634684721501777057142617647654380585317016323758806063124938232519551123440573348326061244006512869165793958775168"
string(4) "1029"
string(4) "7093"
string(5) "-9074"
NULL
string(3) "800"
string(30) "136797365759249926716355081555"
string(300) "983682312243221532860194306859606025979259367996304596374614332718375645173854152266611727577102182844028492473112400528817154210713755887896949560718745264129216953815968005630126359941634684721501777057142617647654380585317016323758806063124938232519551123440573348326061244006512869165793958775168"
string(4) "1029"
string(4) "7093"
string(5) "-9074"
NULL
string(3) "800"
string(30) "136797365759249926716355081555"
string(300) "983682312243221532860194306859606025979259367996304596374614332718375645173854152266611727577102182844028492473112400528817154210713755887896949560718745264129216953815968005630126359941634684721501777057142617647654380585317016323758806063124938232519551123440573348326061244006512869165793958775168"
string(4) "1029"
string(4) "7093"
string(5) "-9074"
NULL
string(3) "800"
string(30) "136797365759249926716355081555"
string(300) "983682312243221532860194306859606025979259367996304596374614332718375645173854152266611727577102182844028492473112400528817154210713755887896949560718745264129216953815968005630126359941634684721501777057142617647654380585317016323758806063124938232519551123440573348326061244006512869165793958775168"
string(4) "1029"
string(4) "7093"
string(5) "-9074"
NULL
string(3) "762"
string(30) "822340340897453415684831711085"
string(301) "7240560133683902061389868703829443708354917824328579773726122219756981024103097560162756171513655189995985599958252688592185764428631571614485572869738344560301294144844739876478557439580966605216861285841689262517286639329902832431755450003123084728943981078635297917573398492558065003906539489023830"
string(4) "9636"
string(5) "-9848"
string(5) "-9648"
NULL
string(3) "762"
string(30) "822340340897453415684831711085"
string(301) "7240560133683902061389868703829443708354917824328579773726122219756981024103097560162756171513655189995985599958252688592185764428631571614485572869738344560301294144844739876478557439580966605216861285841689262517286639329902832431755450003123084728943981078635297917573398492558065003906539489023830"
string(4) "9636"
string(5) "-9848"
string(5) "-9648"

Warning: gmp_random_seed(): Unable to convert variable to GMP - string is not an integer in %s on line %d
bool(false)
Done
