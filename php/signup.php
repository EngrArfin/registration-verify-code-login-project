<?php 
include_once 'bd.php';
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$password = md5($_POST['pass']);
$cpassword = md5($_POST['cpass']);
$Role = 'user';
$verification_status = '';
if(!empty($fname) && !empty($lname) && !empty($email) && !empty($phone) && !empty($password) && !empty($cpassword)){
    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
        $sql = mysqli_query($conn,"SELECT email FROM users WHERE email = '{$email}'");
        if(mysqli_num_rows($sql) > 0){
            echo "$email ~ Already Exits";

        }
        else{
            if($password == $cpassword){
                if(isset($_FILES['image'])){
                    $img_name = $_FILES['image'];
                    $img_typ = $_FILES['image']['type'];
                    $tmp_name = $_FILES['image']['tmp_name'];
                    $img_explode = explode('.' $img_name);
                }
            }
            else{
                echo "Confirm Password Don't Match";

            }
        }
    }

}
else{
    echo "All Input Fields Are Required";
}

?>

  