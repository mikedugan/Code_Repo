<?php
$execution_time = microtime(); # Start counting

# Your code

$execution_time = microtime() - $execution_time;
$execution_time = sprintf('It took %.5f sec', $execution_time);
?>