<?php
require 'BKVPlib.php';
echo readBKVP("example.bkvp", "example3");
echo "\n";
echo writeBKVP("example.bkvp", "example5", "blah2233   blah", false);
?>