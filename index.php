<?php

session_start();//Start a session when anyone connects.
                // Will allow me to use Server side Session variables and functions


/**
 * Created by PhpStorm.
 * User: fadel
 * Date: 12/28/18
 * Time: 3:07 PM
 */

require_once ('formHandler.php');  //<---- TODO : Uncomment this when
//        form handlers ready. This script will run before the 'page' Transition
//




if (isset($_REQUEST,$_REQUEST['page'])) {
    $page_set = $_REQUEST['page']; //setting a variABLE EQUAL TO THE VALUE OF THE PAGE that the user is navigating too //


        if ($_REQUEST['page']=='home') {

            require 'home.html';

        }
        else if ($_REQUEST['page']=='contact') {

            //require '';

        }
        else if ($_REQUEST['page']=='service') {

            //require '';

        }
        else if ($_REQUEST['page']=='about') {

            //require '';

        }
        else{
            //require ''; I think this is where we wanna pop our 404 page //
        }
}
else
    require_once 'home.html';