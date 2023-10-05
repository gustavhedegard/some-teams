<?php
require __DIR__ . "/data.php";

foreach($teams as $team) {
  if($team['city']  'London') {
    continue;
  }
  echo $team['city'] . "<br>";
}
?>

<article>
  <p>Unique cities in table: <?php ?></p>
</article>