<?php
    foreach ($invalidFields as $values):
      foreach ($values as $key => $message):
      	echo "<div id=".$key.">";
        echo $message;
        echo "</div>";
        echo "<br>";
      endforeach;
    endforeach;
?>