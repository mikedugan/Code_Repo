<?php

//useful in combination with scandir() function and a foreach loop
if (file_exists('test.xml') {
  $xml = simplexml_load_file('test.xml');
  $node1 = $xml->node1;
  $node2 = $xml->node1->node2;
  $n2attr = $node2['someAttr'];
}


else { exit('Failed to open file'); }

?>
