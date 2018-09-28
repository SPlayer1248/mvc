<?php
echo 'Start';
$output = shell_exec('nmap -v -O -oG 80.211.114.203');
echo "<pre>$output</pre>";
?>