<?php

$errorMSG = "";

// NAME
if (empty($_POST["name"])) {
    $errorMSG = "Name is required ";
} else {
    $name = $_POST["name"];
}

// EMAIL
if (empty($_POST["email"])) {
    $errorMSG .= "Email is required ";
} else {
    $email = $_POST["email"];
}

// ITEM
if (empty($_POST["item"])) {
    $errorMSG .= "item is required ";
} else {
    $item = $_POST["item"];
}


//  PICKUP
if (empty($_POST["pickup"])) {
    $errorMSG .= "Pick up address is required ";
} else {
    $pickup = $_POST["pickup"];
}


// DELIVERY
if (empty($_POST["delivery"])) {
    $errorMSG .= "Delivery address is required ";
} else {
    $delivery = $_POST["delivery"];
}

// YOUR TELEPHONE
if (empty($_POST["yourtelephone"])) {
    $errorMSG .= "Your telephone is required ";
} else {
    $yourtelephone = $_POST["yourtelephone"];
}

// RECEIVER TELEPHONE
if (empty($_POST["retelephone"])) {
    $errorMSG .= "Receiver telephone is required ";
} else {
    $retelephone = $_POST["retelephone"];
}


$EmailTo = "ozoladimeji@gmail.com";
$Subject = "New Order Received";

// prepare email body text
$Body = "";
$Body .= "Name: ";
$Body .= $name;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $email;
$Body .= "\n";
$Body .= "item: ";
$Body .= $item;
$Body .= "\n";
$Body .= "pickup: ";
$Body .= $pickup;
$Body .= "\n";
$Body .= "delivery: ";
$Body .= $delivery;
$Body .= "\n";
$Body .= "yourtelephone: ";
$Body .= $yourtelephone;
$Body .= "\n";
$Body .= "retelephone: ";
$Body .= $retelephone;
$Body .= "\n";

// send email
$success = mail($EmailTo, $Subject, $Body, "From:".$email);

// redirect to success page
if ($success && $errorMSG == ""){
   echo "success";
}else{
    if($errorMSG == ""){
        echo "Something went wrong :(";
    } else {
        echo $errorMSG;
    }
}

?>