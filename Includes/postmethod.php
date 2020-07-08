<?php

//Get Valus From HTML Form Using POST[""] in PHP


if (isset($_POST["submit2"])) {

    //To check Whether Any Of The Fields is Empty Or Not

    if (empty($_POST["fname"]) || empty($_POST["lname"])) {
        echo "Fields are Required ! Please Fill All The Fields ";
    } else {
        $FirstName = $_POST["fname"];
        $LastName = $_POST["lname"];

        //Check Whether File Is an Image or Not

        $check = getimagesize($_FILES["FileUpload"]["tmp_name"]);
        if ($check !== false) {

            //Convert an Image to Base64

            $data = base64_encode(file_get_contents($_FILES["FileUpload"]["tmp_name"]));
            echo  $data;
        } else {
            echo "File is not an Image.";
        }

        //Dsiplaying Field Of Forms

        echo $FirstName . "<br />";
        echo $LastName . "<br />";
    }
}