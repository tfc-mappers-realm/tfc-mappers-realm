<?php

include 'hostvars.php';

if (isset($LOG_FPATH)) {
  file_put_contents($LOG_FPATH,
      $_SERVER['REQUEST_URI'] . ',' . $_SERVER['REMOTE_ADDR'] . PHP_EOL,
      FILE_APPEND
  );
}

$filename = './' . $_SERVER['REQUEST_URI'];
$handle = fopen ($filename, "r");
$content = fread ($handle, filesize ($filename));
fclose ($handle);

header('Content-Type: application/octet-stream');
echo $content;

?>
