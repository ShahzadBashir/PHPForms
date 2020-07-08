<?php

if (isset($_GET["submit"])) {
    if (empty($_GET["fname"]) || empty($_GET["fname"])) {
        echo "Fields are Required ! Please Fill All The Fields ";
    }
}