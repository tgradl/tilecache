<?php
# Load the settings
require_once ('./.config.php');

?>
<html>
  <head>
    <style>
      th, td {
        text-align: left;
        padding: 2px 5px;
      }
    </style>
  </head>
  <body>
    <h1>Tilecache</h1>
    <h2>Configured layers</h2>
    <table>
      <tr><th>ID</th><th>Sample url</th><th>Source</th></tr>
    <?php
      foreach ($layers as $key => $layer) {
        $url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]/$key/9/250/167.png";
        echo "<tr><th>" . $key . "</th><td><a href='$url' />" . $url . "</a></td><td>" . $layer . "</td></tr>";
      }
      
    ?>

    </table>
  </body>
</html>