<?php
function code($obj, $callback) {
	$object = $obj->object;
	if (!isset($object->points)) {
		$object->points = 69;
	}
	$callback($object);
}
