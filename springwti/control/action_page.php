<?php
$fname=$lname=$phone=$email=$gender="";
$fnameError = $lnameError = $phoneError = $emailError = $genderError = $addressError="";
$successMessage = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // First Name Validation
    if (empty($_POST["fname"])) {
        $fnameError = "First name is required.";
    } elseif (!preg_match("/^[A-Za-z]+$/", $_POST["fname"])) {
        $fnameError = "Only letters are allowed.";
    } else {
        $fname = $_POST["fname"];
    }

    // Last Name Validation
    if (empty($_POST["lname"])) {
        $lnameError = "Last name is required.";
    } elseif (!preg_match("/^[A-Za-z]+$/", $_POST["lname"])) {
        $lnameError = "Only letters are allowed.";
    } else {
        $lname = $_POST["lname"];
    }

    // Phone Validation
    if (empty($_POST["phone"])) {
        $phoneError = "Phone number is required.";
    } elseif (!preg_match("/^\+8801\d{8}$/", $_POST["phone"])) {
        $phoneError = "Phone number must be in the format +8801XXXXXXXXX.";
    } else {
        $phone = $_POST["phone"];
    }
    
    // Email Validation
    if (empty($_POST["email"])) {
        $emailError = "Email is required.";
    } elseif (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
        $emailError = "Invalid email format.";
    } else {
        $email = $_POST["email"];
    }

    // Gender Validation
    if (empty($_POST["gender"])) {
        $genderError = "Gender is required.";
    } else {
        $gender = $_POST["gender"];
    }
    //Address Validation
    if (empty($_POST["address"])) {
        $addressError = "Address is required.";
    } else {
        $address = $_POST["address"];
    }

    //IF all passed validation
    if (!$fnameError && !$lnameError && !$phoneError && !$emailError && !$genderError && !$addressError) {
        $successMessage = "Form submitted successfully!";
        $fname = $lname = $phone = $email = $gender = $address = "";
        $fnameError = $lnameError = $phoneError = $emailError = $genderError = $addressError = "";
    }
}