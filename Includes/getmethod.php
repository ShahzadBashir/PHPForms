<?php

//Get Valus From HTML Form Using GET[""] in PHP

if (isset($_GET["submit"])) {

    //To check Whether Any Of The Fields is Empty Or Not 

    if (empty($_GET["fname"]) || empty($_GET["fname"])) {
        echo "Fields are Required ! Please Fill All The Fields ";
    }
}