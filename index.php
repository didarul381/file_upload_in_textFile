<?php
echo "<pre>";
print_r($_POST);
// print_r($_FILES);
// echo(getcwd());
$provide_path=getcwd();
$path=str_replace("\\","/",$provide_path);
$rpath_of_file= $path."/data.txt";
// $fp=fopen($rpath_of_file,'a');
// fwrite($fp,"sakib, \n");
// $data=file_get_contents($rpath_of_file);
//  $adata=explode(',',$data);
// print_r($adata);
// echo( $adata);
// echo"<br>";
// echo($path);

if(isset($_POST["submit"])){

$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
if(4!=$_FILES['img']['error']){
$imgName=$_FILES['img']['name'];
$tem_dir=$_FILES['img']['tmp_name'];
$my_dir="assest/images/{$imgName}";
move_uploaded_file($tem_dir,$my_dir);
// $datas=$name . $email.$phone .$my_dir;

$fp=fopen($rpath_of_file,'a');
// fwrite($fp,"$_POST,\n");
fwrite($fp,"\n {$name},\n {$email},\n {$phone},\n {$my_dir}");
$data=file_get_contents($rpath_of_file);
 $adata=explode(",",$data);
print_r($adata);
echo "sucessfull";

}else{
    echo "not sucessfull";
}

}
?>
<img src="<?php echo $my_dir;?>" alt="">

<form action="" method="post" enctype="multipart/form-data">
  <label for="name">Name:</label>
  <input type="text" id="name" name="name" ><br><br>
  <label for="email">Email:</label>
  <input type="email" id="email" name="email" ><br><br>
  <label for="phone">phone:</label>
  <input type="text" id="phone" name="phone"><br><br>
  <input type="file" id="img" name="img"><br><br>
  <input type="submit" value="Submit" name="submit">
</form>

<?php
$names=file('data.txt');
// To check the number of lines 
echo count($names).'<br>';

foreach($names as  $key => $name)
// echo  $key ."=>".$name."<br>";
{
 ?>   
 <p><?php echo $name; ?></p>
<img src="<?php echo $name;?>" alt=""><?php 
}
?>
