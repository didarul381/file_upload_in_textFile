






<table border="1">

<tr>
<th>Name</th>
<th>Email</th>
<th>Phone</th>
<th>img</th>
</tr>
<?php
$file=fopen('data.txt','r');
while(!feof($file)){
    $contents=fgets($file);
    // print_r($contents);
     $adata=explode(",", $contents);
    //  echo"<pre>";
    //  print_r($adata);
    list($name,$age,$dig,$img)=$adata;
    // echo"<pre>";
    // echo $age;
    // var_dump($name);

?>
  <tr>
    <td><?php echo $name ?></td>
    <td><?php echo $age ?></td>
    <td><?php echo $dig ?></td>
    <td><img src="<?php echo $img ?>" width="100" height="100" alt=""></td>
    
  </tr>
  <?php } ?>
</table>