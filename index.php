<?php

  $index = new DOMDocument();
  $index->loadHtmlFile('index.html');
  echo $index->saveHtlm();

?>
