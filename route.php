

  
<div style="box-shadow: 2px 2px 2px 1px rgba(0, 0, 0, 0.2);  text-align:center; margin:0 auto; ">

<?php
$names=file('data.txt');
// To check the number of lines 

foreach($names as  $key => $name)
// echo  $key ."=>".$name."<br>";
{
 ?> 
    <div style="  box-shadow: 2px 2px 2px 1px rgba(0, 0, 0, 0.2); text-align:center; margin:0 auto;" >
     <div style=" text-align:center; margin:0 auto;">
     <p><?php echo $name; ?></p>
    <img src="<?php echo $name;?>" alt="" >
     </div>
     <hr>
    </div>
    
</div>
<?php }
?>


