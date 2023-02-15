<?php $title="Reading" ; 
include("../Layout/header.php") ;
include("db.php");
$sql="select * from studentinfo";
$result=$connection->query($sql);
if($result -> num_rows >0){
    echo"
    <table class='table'>
    <tr><th>First Name</th><th>Last Name</th><th>city</th><th>groupid</th><th>id</th></tr>";
    while($row=$result->fetch_assoc()){
    echo "
    <tr>
    <td>$row[fname]</td>
    <td>$row[lname]</td>
    <td>$row[city]</td>
    <td>$row[groupid]</td>
    <td><a  href='updatesingle.php?id=$row[id]'>$row[id]</a></td>
    </tr>";
    }
    echo"</table>";
}else{
    echo"no data";
}
$connection->close();

?>


<?php include("../Layout/footer.php") ?>
