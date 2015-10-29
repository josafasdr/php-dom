<?php

  $index = new DOMDocument();
  $index->loadHTMLFile('index.html');
  echo $index->saveHTML();

?>
