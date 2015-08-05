<?php
  foreach ($invalidFields as $values):
    foreach ($values as $key => $message):
      echo "<div id=".$key." class='error-message'>".$message."</div><br>";
    endforeach;
  endforeach;
?>