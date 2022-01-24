<?php
if (!class_exists('ActionNetwork')) {
	require_once('actionnetwork.class.php' );
}

$ActionNetwork = new ActionNetwork('VYPLNIT_KLIC');

$response = $ActionNetwork->call( 'forms/VYPLNIT_ID_PETICE');

print($response->total_submissions);
?>