<?php
require __DIR__ . "/data.php";

$cities = array();

foreach ($teams as $teamInfo) {
    if (isset($teamInfo['city'])) {
        $cities[] = $teamInfo['city'];
    }
}

$uniqueCities = array_unique($cities);

?>

<article>
  <p>Unique cities in table: 
    <?php
    foreach($uniqueCities as $city) {
      echo $city . ", ";
    }
    ?></p>
</article>