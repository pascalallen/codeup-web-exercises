<?php
require_once "Input.php";
class Model
{
    protected static $dbc;
    protected static $table;

    // Array to store our key/value data
    private $attributes = [];

    /*
     * Constructor
     */
    public function __construct()
    {
        self::dbConnect();
    }

    /*
     * Connect to the DB
     */
    private static function dbConnect()
    {
        if (!self::$dbc)
        {
            // @TODO: Connect to database
            require_once "db_connect.php";
        }
    }

    // Magic getter to retrieve values from $data
    public function __get($name)
    {
        // Check for existence of array key $name
        if (array_key_exists($name, $this->attributes)) {
            return $this->attributes[$name];
        }

        return null;
    }

    // Magic setter to populate $contacts array
    public function __set($name, $value)
    {
        // Set the $name key to hold $value in $data
        $this->attributes[$name] = $value;
    }

    public function save()
    {
    	// $this->attributes['id'];
    	if (!empty($this->attributes))
    	{
    		$insert_table .= "INSERT INTO " . self::$table . " (";

    		implode()

    		foreach($this->attributes as $attribute)
    		{

    		}

    		$insert_table .= ') VAlUES ('


    			email, name, phone, address, city, state, zip) VALUES (:email, :name, :phone, :address, :city, :state, :zip)";



   //  		if (Input::setAndNotEmpty('email') &&
			// 	Input::setAndNotEmpty('name') &&
			// 	Input::setAndNotEmpty('phone') &&
			// 	Input::setAndNotEmpty('address') && 
			// 	Input::setAndNotEmpty('city') && 
			// 	Input::setAndNotEmpty('state') &&
			// 	Input::setAndNotEmpty('zip')
			// 	)
   //  		{
	  //   		$email = Input::has('email') ? Input::get('email') : null;
			// 	$name = Input::has('name') ? Input::get('name') : null;
			// 	$phone = Input::has('phone') ? Input::get('phone') : null;
			// 	$address = Input::has('address') ? Input::get('address') : null;
			// 	$city = Input::has('city') ? Input::get('city') : null;
			// 	$state = Input::has('state') ? Input::get('state') : null;
			// 	$zip = Input::has('zip') ? Input::get('zip') : null;

			// 	$insert_table = "INSERT INTO contacts (email, name, phone, address, city, state, zip) VALUES (:email, :name, :phone, :address, :city, :state, :zip)";

			//     $stmt = $dbc->prepare($insert_table);
			//     $stmt->bindValue(':email', $email, PDO::PARAM_STR);
			//     $stmt->bindValue(':name', $name, PDO::PARAM_STR);
			//     $stmt->bindValue(':phone', $phone, PDO::PARAM_STR);
			//     $stmt->bindValue(':address', $address, PDO::PARAM_STR);
			//     $stmt->bindValue(':city', $city, PDO::PARAM_STR);
			//     $stmt->bindValue(':state', $state, PDO::PARAM_STR);
			//     $stmt->bindValue(':zip', $zip, PDO::PARAM_STR);

			//     $stmt->execute();
   //  		} else if (Input::has('update')) 
   //  		{
			// 	$delete_column = "UPDATE contacts SET email = '', name = '', phone = '', address = '', city = '', state = '', zip = '' WHERE id = :id";

			// 	$del = $dbc->prepare($delete_column);
			// 	$del->bindValue(':id', Input::get('id'), PDO::PARAM_STR);
				
			// 	$del->execute();
			// } else if (Input::has('id')) 
   //  		{
			// 	$delete_column = "DELETE FROM contacts WHERE id = :id";

			// 	$del = $dbc->prepare($delete_column);
			// 	$del->bindValue(':id', Input::get('id'), PDO::PARAM_STR);
				
			// 	$del->execute();
			// }else 
			// {
			// 	$message = "Invalid format. Please try again.";
			// 	$javascript = "<script type='text/javascript'>alert('$message');</script>";
			// 	echo $javascript;
			// }
        // @TODO: Ensure there are attributes before attempting to save
        // @TODO: Ensure that update is properly handled with the id key
        // @TODO: After insert, add the id back to the attributes array so the object can properly reflect the id
        // @TODO: You will need to iterate through all the attributes to build the prepared query
        // @TODO: Use prepared statements to ensure data security
        // @TODO: Perform the proper action - if the `id` is set, this is an update, if not it is a insert
    	}
    }

    /*
     * Find a record based on an id
     */
    public static function find($id)
    {
        // Get connection to the database
        self::dbConnect();

        // @TODO: Create select statement using prepared statements
        $stmt = $dbh->prepare("SELECT * FROM contacts (name, value) VALUES (:name, :value)");
        // @TODO: Store the resultset in a variable named $result

        // The following code will set the attributes on the calling object based on the result variable's contents

        $instance = null;
        if ($result)
        {
            $instance = new static;
            $instance->attributes = $result;
        }
        return $instance;
    }
    public static function getTableName()
    {
    	return static::$table;
    }

    /*
     * Find all records in a table
     */
    public static function all()
    {
        self::dbConnect();

        // @TODO: Learning from the previous method, return all the matching records
    }

}




