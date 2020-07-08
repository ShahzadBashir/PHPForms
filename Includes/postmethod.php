<?php

//Get Valus From HTML Form Using POST[""] in PHP


if (isset($_POST["submit2"])) {

    //To check Whether Any Of The Fields is Empty Or Not

    if (empty($_POST["fname"]) || empty($_POST["fname"])) {
        echo "Fields are Required ! Please Fill All The Fields ";
    }
}