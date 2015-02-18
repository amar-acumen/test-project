<?php error_reporting(-1);
//echo '1';
 $output = shell_exec('git log');
echo "<pre>$output</pre>";?>