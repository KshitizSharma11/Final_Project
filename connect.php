<style>
    *{
        background-repeat: no-repeat;
    background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),url("https://images.squarespace-cdn.com/content/v1/5755bccb8259b515333df0e1/1475268631883-T2J2B3DVJHY3L2I4Z3Z9/Stocksy_comp_476031-darker.jpg");
    background-size: cover;
    background-position: center center;
    background-attachment: fixed;
    }
</style>
<center>
<?php
$custName = $_POST['cname'];
$DOB = $_POST['dob'];
$gender = $_POST['gender'];
$mobile = $_POST['phone'];
$email = $_POST['email'];
$datev =$_POST['date'];
$timev =$_POST['tov'];
$t_no =$_POST['table'];



$conn = new mysqli('localhost','root','','visit_us');
if($conn->connect_error){
    die('Connection Failed :'.$conn->connect_error);

}
else{
        $stmt =mysqli_query($conn,"select * from details where Table_Number ='$t_no' AND Time_Of_Visit ='$timev' AND Date_Of_Visit ='$datev'");
        $rows=mysqli_num_rows($stmt);
        if ($rows>0) { 
            echo '<script>alert("Sorry The Table Is Already Booked Try For Another One")</script>';
            $stmt->close();
           $conn->close();
    
         } 
         else {
            $stmt2 =$conn->prepare("insert into details(Name,DOB,Gender,Phone_Num,Email,Date_Of_Visit,Time_Of_Visit,Table_Number)
    values(?,?,?,?,?,?,?,?)");
    $stmt2->bind_param("sssisssi",$custName,$DOB,$gender,$mobile,$email,$datev,$timev,$t_no);
    $stmt2->execute();
    mail("$email","Booking Confirmation","Your Booking For Table Number $t_no at $timev on $datev is confirmed..");
    echo "<p align='center'> <font color=white  size='6pt'>Booked Successfuly Please Check Your Mailbox</font> </p>";
    $stmt2->close();
    $conn->close();
         }
    
}


?>
</center>