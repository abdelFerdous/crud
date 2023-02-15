<?php $title="Crude" ;include("../Layout/header.php")?>


<form action="" method="post">
<input type="text" name="fname" placeholder="First Name" class="form-control" required><br>
<input type="text" name="lname" placeholder="Last Name" class="form-control" required><br>
<input type="text" name="city" placeholder="city"  required><br><br>
<select name="groupid">
        <option value="BBCAP22">BBCAP22</option>
        <option value="BBCAP21">BBCAP21</option>
        <option value="other">other</option>
        
    </select><br><br>
<input type="submit" name="submit" value="submit">
</form>
<?php 
if(isset($_POST["submit"])){
   $fname=$_POST["fname"];
   $lname=$_POST["lname"];
   $city=$_POST["city"];
   $groupid =$_POST["groupid"];
   include("db.php");
   $sql = "insert into studentinfo (fname , lname, city, groupid)
           values('$fname','$lname' , '$city' , '$groupid')";
    if($connection->query($sql)===true){
        echo "database updated successfully";
    }else{
        echo "Error :".$connection->error;
    }       
}
?>


<?php include("../Layout/footer.php") ?>