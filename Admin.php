<?php
/**
 * Created by PhpStorm.
 * User: fadel
 * Date: 1/8/19
 * Time: 9:21 PM
 */

class Admin
{

    //Private data fields representing columns within the Admin tables.
    // This class will be called when using the PDO FETCH_BY_CLASS Fetch
    // method to authenticate any of the 5 Admins.all private data fields
    // must have the same name as the database table columns //

    private $admin_id;
    private $admin_first;
    private $admin_priv_id;
    private $admin_uname;
    private $admin_password;

    public function __set($name, $value)
    {
        // TODO: Don't touch or add to this(unless we need to override its functionality).
        // This is called a magic function By default, when using fetch
        // by class in PDO, this function is what
        // assigns private data to the corresponding columns in the dbs
        // (fields with the same name as the private vars above ).
        // If you remove this, PHP will still call it regardless.
        // I told you... its fucking magic (y)


    }

}