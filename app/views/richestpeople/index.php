<?php 
  //include(APPROOT . "/views/includes/head.php" );
  echo $data["title"]; 
?>
<table>
  <thead>
    <th>id</th>
    <th>Naam</th>
    <th>Vermogen</th>
    <th>Leeftijd</th>
    <th>Bedrijf</th>
    <th>delete</th>
  </thead>
  <tbody>
    <?=$data['richestpeople']?>
  </tbody>
</table>
<a href="<?=URLROOT;?>/homepages/index">terug</a>

