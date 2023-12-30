<?php

require(__DIR__ . '/../../repo/ZoneFile.php');

$zone_file = new \evan_klein\zone_file\ZoneFile('example.com.');

$zone_file->addA('www', '93.184.216.34');
$zone_file->addAAAA('www', '2606:2800:220:1:248:1893:25c8:1946');

echo $zone_file->output();

?>