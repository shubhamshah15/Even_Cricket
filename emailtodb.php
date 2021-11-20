
<?php
$con = mysqli_connect('localhost', 'root', '', 'evencricket');
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['subs-email'])) {
    $email = $_POST['subs-email'];
    $sql = "SELECT * FROM `subscribers` WHERE email = '$email'";

    if (mysqli_num_rows(mysqli_query($con, $sql)) != 0) {
        echo '<script> alert("You have already subscribed"); </script>';
    } else {
        $sql = "INSERT INTO `subscribers`(`email`) VALUES ('$email')";
        if (mysqli_query($con, $sql) === true) {
            echo '<script> alert("Your email is successfully subscribed"); </script>';
        } else {
            echo '<script> alert("Error"); </script>';
        }
    }
}


?>
