<?php
header('Content-Type: application/json');
echo 'callback({"type":"FeatureCollection","marcacoes":'.json_encode($marcacoes).'});'
?>