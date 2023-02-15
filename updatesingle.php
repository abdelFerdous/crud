<?php 
$title="updating";
include("../Layout/header.php");
$a=$_GET['id'];
include("db.php");
$result = mysqli_query($connection ,"select * from studentinfo where id='$a'");
$row = mysqli_fetch_array($result);
?>
<h2>Update information</h2>
<form action="" method="post" name="update">
<input type="text" name="fname" placeholder="First Name" class="form-control" required value="<?php echo $row['fname'] ?>"><br>
<input type="text" name="lname" placeholder="Last Name" class="form-control" required value="<?php echo $row['lname'] ?>"><br>
<input type="text" name="city" placeholder="city"  required value="<?php echo $row['city'] ?>"><br><br>
<select name="groupid" value="<?php echo $row['fname'] ?>">
        <option value="BBCAP22">BBCAP22</option>
        <option value="BBCAP21">BBCAP21</option>
        <option value="other">other</option>
        
    </select><br><br>
<input type="submit" name="update" value="update">
<input type="submit" name="delete" value="delete">
</form>
</form>
<?php 
if(isset($_POST["update"])){
   $fname=$_POST["fname"];
   $lname=$_POST["lname"];
   $city=$_POST["city"];
   $groupid =$_POST["groupid"];
  // include("db.php");
   $sql = "UPDATE studentinfo set fname ='$fname' , lname = '$lname', city ='$city', groupid = '$groupid'where id='$a'";
    if($connection->query($sql)===true){
        echo "database updated successfully";
    }else{
        echo "Error :".$connection->error;
    }       
}else if(isset($_POST["delete"])){
    $sql = "DELETE  from studentinfo where id='$a'";
    if($connection->query($sql)===true){
        echo "record deleted successfully";
    }else{
        echo "Error :".$connection->error;
    }    

}
?>
<?php include("../Layout/footer.php") ?>