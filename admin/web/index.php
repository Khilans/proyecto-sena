<?php
include_once '../lib/helpers.php';

    include_once '../view/partials/head.php';
echo "<body>";
            echo "<div>";
                
                include_once '../view/partials/header.php';
if(isset($_GET['modulo'])){
                    resolve();
                }else{
                    include_once '../view/partials/home.php';
                }
                echo "</div>";
            include_once '../view/partials/scripts.php';
echo "</body>";

