<?php 
require_once "Input.php";
require_once "Model.php";

class User extends Model
{
	protected static $table = 'contacts';

	protected static function findUserByUsername()
	{
		self::dbConnect();
        $table = static::$table;
        $query = "SELECT * FROM $table WHERE username = :username";
        $stmt = self::$dbc->prepare($query);
        $stmt->bindValue(':username', $username, PDO::PARAM_INT);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        // The following code will set the attributes on the calling object based on the result variable's contents

        $instance = null;
        if ($result)
        {
            $instance = new static;
            $instance->attributes = $result;
        }
        return $instance;
	}
}