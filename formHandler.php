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




                //TODO : Create an encryption module in PHP  to encrypt both the passwords AND user names since its sensitive data(Admin login)

                if (isset($_POST['uname'], $_POST['pass'])){ //check if username and password have set values

                    $loop_for_uname_and_pass = 'SELECT admin_uname FROM Admins'; // grab username for comparing,
                                                                                // not risking a select * until shits confirmed by uname
                                                                                //TODO : Adding a master pin for each admin so it logs in

                    $stmt = $pdo->prepare($loop_for_uname_and_pass); //prepare statements to trim SQL injections

                    $stmt->execute();//execute query

                    //could also set it in the while loop below
                    $stmt->setFetchMode(PDO::FETCH_CLASS, 'Admin'); //Setting the fetch mode to class
                                                                   //so it'll automatically assign column values
                                                                  // to the class PRIVATE properties. no more fetch num bullshit.

                    //Looping through the result of user-names to confirm uname

                    while ($admin = $stmt->fetch() ){



                        //NOTE : $admin is the Admin object // no need for new operators or declarations//

                        //TODO : check if Username input matches the retrieved username from each Database row/entry

                        //if it matches, check if the password (In an encrypted format) matches the stored hash in the dbs

                        //if they match then ask for authenticating pin and compare it (as a hash) with the stored hashed pin

                        //NOTE : WE can add other forms of authentication like security question and what not

                        //TODO : Limit login attempts to 3 tries, then disable account for 30 mins. Log the IP address to blacklist


                    }

                    //TODO : set session variables for activity info //

                }//end of 2nd if stmt that checks if post fields are set with a value //



            break; //End of Login case //



    }//End of switch









}


