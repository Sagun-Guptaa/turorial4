<?php
echo "Name: Sagun Prasad Gupta<br>";

echo "Today's Date: " . date("Y-m-d") . "<br>";

$hour = date("H");

if ($hour < 12) {
    echo "It is Morning";
} elseif ($hour < 18) {
    echo "It is Afternoon";
} else {
    echo "It is Evening";
}
?>
