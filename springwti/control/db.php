<?php 
include "action_page.php";

if (!$fnameError && !$lnameError && !$phoneError && !$emailError && !$genderError && !$addressError &&
    !empty($fname) && !empty($lname) && !empty($phone) && !empty($email) && !empty($gender) && !empty($address)) {
    function insertData($conn, $fname, $lname, $phone, $email, $gender, $address) {
        $sql = "INSERT INTO users (fname, lname, phone, email, gender, address) 
                VALUES ('$fname', '$lname', '$phone', '$email', '$gender', '$address')";
        return mysqli_query($conn, $sql);
    }
    function closeCon( $conn ) {
        return mysqli_close($conn);
    }
}
?>