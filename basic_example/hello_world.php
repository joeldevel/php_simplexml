<?php
/* How to create a SimpleXMLELement object
 * Run on terminal: php -f hello_world.php
 */

$xmlString = <<<XML
<?xml version='1.0'?>
<userdata>
    <user>pepe</user>
    <telephone>1164252154</telephone>
	<address>Liberty 1032</address>
</userdata>
XML; 

# from a string
# this function receives a string representatin of a valid xml document
# and returns an object. Then use the object
$xml = simplexml_load_string($xmlString);
print_r($xml); 
$user = $xml->user;
print_r("user: $user\n");
$user = (string) $xml->user;
print_r("user: $user\n");

# Using the constructor
echo "\n#####################################\n";
$xmlFromString = new SimpleXMLElement($xmlString);
print_r($xmlFromString);

# from a file
echo "\n#####################################\n";
$xmlFromFile = simplexml_load_file('hello.xml');
print_r($xmlFromFile);
