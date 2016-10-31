<?php
$url = "{$_SERVER['REQUEST_URI']}";
echo $url;
echo "<br>";
$query = explode( '/' , $url );
echo $query['2'];
$query = $query['2'];
$query = explode( '?' , $query );
echo "<br>";
echo $query['1'];
$query = $query['1'];
$url = "http://example.com/?{$query}";
echo "<br>";
echo $url;
?>
