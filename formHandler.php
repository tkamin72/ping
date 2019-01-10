<?php
/**
 * Created by PhpStorm.
 * User: fadel
 * Date: 1/8/19
 * Time: 12:30 PM
 *
 * DESCRIPTION : This file will carry
 * all the core logic of this website
 * when any given user makes a request.
 * All database interactions should happen
 * here. AJAX requests should be made here as well
 * just set a value to the $_POST['action'] variable.
 */

require 'Admin.php';
require '../../connect.php'; //<--Multiple Hidden files on the server to get full access to Database

if (isset($_POST['action'])){

    $form_value = $_POST['action'];

    switch ($form_value){

        //case of authenticating (Login)
        case 'authenticate' : //check the for value if its == 'authenticate'




                //<!-- Use 512 bit ARGON II Encryption with self defined Sal--!>//

                if (isset($_POST['uname'], $_POST['pass'])){ //check if username and password have set values

                    $loop_for_uname_and_pass = 'SELECT * FROM Admins WHERE admin_uname = ?'; // grab username AND PASS for verifying


                    $stmt = $pdo->prepare($loop_for_uname_and_pass); //prepare statements to trim SQL injections

                    $stmt->execute($_POST['uname']);//execute query by passing the search parameter (username)

                    $stmt->setFetchMode(PDO::FETCH_CLASS, 'Admin'); //Setting the fetch mode to class
                                                                   //so it'll automatically assign column values
                                                                  // to the class PRIVATE properties. no more fetch num bullshit.
                    $admin = $stmt->fetchObject(); // fetch row and return it as an Object as defined in Admin.php class file


                    if ($admin && password_verify($_POST['pass'], $admin->admin_password))
                    {
                        //if its authenticated
                        $_SESSION['active_user'] = $admin; // set a Server session variable to represented the newly constructed object
                    } else {

                       // $log_failed_attempt_IP = 'INSERT INTO potential_break_in VALUES ("'.$admin->admin_password.'",)';


                        //"invalid";
                    }


                    //TODO : set session variables for activity info //

                }//end of 2nd if stmt that checks if post fields are set with a value //



            break; //End of Login case //



    }//End of switch









}


