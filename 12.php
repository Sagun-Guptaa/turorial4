<?php

$json = file_get_contents("product.json");
$data = json_decode($json, true); // array
foreach ($data as $p) {
echo "Name: " . htmlspecialchars($p['name']) . " - Price: " . htmlspecialchars($p['price']) . "<br>";
}
?>