<?php error_reporting(-1);
//echo '1';
 $output = shell_exec('git pull');
echo "<pre>$output</pre>";?>