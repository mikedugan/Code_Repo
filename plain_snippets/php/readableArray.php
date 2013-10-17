<?php
function readableArray($elements, $delimiter = ', ', $finalDelimiter = ' and ') {
       $lastElement = array_pop($elements);
       return join($delimiter, $elements) . $finalDelimiter . $lastElement;
}
?>