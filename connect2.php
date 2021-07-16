<style>
*{
    background-repeat: no-repeat;
    background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),url("https://images.squarespace-cdn.com/content/v1/5755bccb8259b515333df0e1/1466119893918-X0SATSKR7JA3GP361K3R/Stocksy_comp_821143-crop.jpg");
    background-size: cover;
    background-position: center center;
    background-attachment: fixed;
}
</style>

<?php
$custName = $_POST['cname'];
$DOB = $_POST['dob'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$mobile = $_POST['phone'];
$address =$_POST['address'];
$Visit_Frequency =$_POST['visit'];
$datev =$_POST['dov'];
$timev =$_POST['tov'];
$rating =$_POST['rating1'];
$feedback =$_POST['feedback'];
$Q2 =$_POST['Q2'];
$Q3 =$_POST['Q3'];

$conn = new mysqli('localhost','root','','feedback');
if($conn->connect_error){
    die('Connection Failed :'.$conn->connect_error);

}
else{
    $stmt =$conn->prepare("insert into data(Name,DOB,Gender,Email,Phone_Num,Address,Visit_Frequency,Date_Of_Visit,Time_Of_Visit,Rating,Feedback,Q2,Q3)
    values(?,?,?,?,?,?,?,?,?,?,?,?,?)");
    $stmt->bind_param("ssssissssisss",$custName,$DOB,$gender,$email,$mobile,$address,$Visit_Frequency,$datev,$timev,$rating,$feedback,$Q2,$Q3);
    $stmt->execute();
    echo "<p align='center'> <font color=white  size='6pt'>Your Response Has Been Recorded</font> </p>";
    $stmt->close();
    $conn->close();
}


?>