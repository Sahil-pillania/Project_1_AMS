<?php
//fetch.php
//$connect = mysqli_connect("localhost", "root", "", "testing");
include '_dbconnect.php';
$output = '';
$query = "SELECT * FROM students ORDER BY registration_no ASC";
$result2 = mysqli_query($conn, $query);
$output = '
<br />
<hr>
<h3 align="center" style="background:aliceblue;">Data you have Entered</h3>
<h5 align="center" style="background:antiquewhite;">No actions needed here</h5>
<hr>
<table class="table table-bordered table-striped align-middle">
 <tr>
  <th width="5%" scope="col">SNO</th>
                    <th width="20%" scope="col">Reg_No</th>
                    <th width="10%" scope="col">Class Roll No</th>
                    <th width="10%" scope="col">University Roll No</th>
                    <th width="15%" scope="col">Name</th>
                    <th width="15%" scope="col">E-mail</th>
                    <th width="15%" scope="col">Ph-No</th>
 </tr>
';
$count = 1;
while($row = mysqli_fetch_array($result2))
{

 $output .= '
 <tr>
 <td> '.$count.' </td>
  <td>'.$row["registration_no"].'</td>
  <td>'.$row["class_roll_no"].'</td>
  <td>'.$row["university_roll_no"].'</td>
  <td>'.$row["name"].'</td>
  <td>'.$row["email"].'</td>
  <td>'.$row["phone_no"].'</td>
  
 </tr>
 ';
 $count++;
}
$output .= '</table>';
echo $output;
?>