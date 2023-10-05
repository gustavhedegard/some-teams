<?php
require __DIR__ . "/data.php";
?>

<table>
  <tr>
    <?php foreach ($teams as $key => $team) : ?>
      <th>
        <?php echo $key ?>
      </th>
    <?php endforeach; ?>
  </tr>
  <tr>
    <?php foreach ($teams as $key => $team) : ?>
      <td>
        <?php echo $team['league']; ?>
      </td>
    <?php endforeach ?>
  </tr>
  <tr>
    <?php foreach ($teams as $key => $team) : ?>
      <td>
        <?php echo $team['last-time-champions']; ?>
      </td>
    <?php endforeach ?>
  </tr>
  <tr>
    <?php foreach ($teams as $key => $team) : ?>
      <td>
        <?php echo $team['city']; ?>
      </td>
    <?php endforeach ?>
  </tr>
  <tr>
    <?php foreach ($teams as $key => $team) : ?>
      <td>
        <a href=" <?php echo $team['url']; ?> "> Web page</a>
      </td>
    <?php endforeach ?>
  </tr>
</table>