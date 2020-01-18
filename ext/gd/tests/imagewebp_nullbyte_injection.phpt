--TEST--
Testing null byte injection in imagewebp
--SKIPIF--
<?php
if(!extension_loaded('gd')){ die('skip gd extension not available'); }
$support = gd_info();
if (!isset($support['WebP Support']) || $support['WebP Support'] === false) {
	print 'skip webp support not available';
}
?>
--FILE--
<?php
$image = imagecreate(1,1);// 1px image
try {
    imagewebp($image, "./foo\0bar");
} catch (TypeError $e) {
    echo $e->getMessage(), "\n";
}
?>
--EXPECT--
Invalid 2nd parameter, filename must not contain null bytes
