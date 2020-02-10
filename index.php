<?php
 $json = file_get_contents("https://ex2json.herokuapp.com/json.php");

 $data = json_decode($json,true);
 $list = $data['Pets'];
?>

<center><h1>5 Best Pets to have</h1>

<table border="1px #000 solid">
  <tr class="head">
    <th>Name</th>
    <th>Scientif Name</th>
    <th>Average Lifespan</th>
    <th>Family</th>
  </tr>
<?php
  foreach($list as $value){
?>
  <tr>
    <td><?php echo $value['name'];?></td>
    <td><?php echo $value['sciname'];?></td>
    <td><?php echo $value['lifespan'];?></td>
    <td><?php echo $value['family'];?></td>
  </tr>
<?php
  }
?>
</table>
</center>
