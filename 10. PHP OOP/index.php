<?php

require_once 'cdmusic.php';
require_once 'cdcabinet.php';

echo "<h3>CD Music</h3>";
$music = new cdmusic("Diki Prasetyo", 10000, 0.2, "Armada", "POP");
echo "Name : " . $music->getName() . "<br>";
echo "Discount : " . $music->getDiscount() . "<br>";
echo "Artist : " . $music->getArtist() . "<br>";
echo "Genre : " . $music->getGenre() . "<br>";
echo "Price : Rp." . $music->getPrice() . "<br>";
echo "<br>";
echo "<br>";

echo "<h3>CD Cabinet</h3>";
$cabinet = new cdcabinet("RAK 4", 10000, 0, 50, "Metal");
echo "Name : " . $cabinet->getName() . "<br>";
echo "Discount : " . $cabinet->getDiscount() . "<br>";
echo "Capacity : " . $cabinet->getCapacity() . "<br>";
echo "Model : " . $cabinet->getModel() . "<br>";
echo "Price : Rp." . $cabinet->getPrice() . "<br>";
?>
