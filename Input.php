<?php

class Input
{

    public static function setAndNotEmpty($key)
    {
        if(isset($_REQUEST[$key]) && $_REQUEST[$key] != '') {
            return true;
        }
    }

    /**
     * Check if a given value was passed in the request
     *
     * @param string $key index to look for in request
     * @return boolean whether value exists in $_POST or $_GET
     */
    public static function has($key)
    {
        // TODO: Fill in this function
        return isset($_REQUEST[$key]);
    }

    /**
     * Get a requested value from either $_POST or $_GET
     *
     * @param string $key index to look for in index
     * @param mixed $default default value to return if key not found
     * @return mixed value passed in request
     */
    public static function get($key, $default = null)
    {
        // TODO: Fill in this function
        if(self::has($key)){
            return $_REQUEST[$key];
        }
        return $default;
    }

    public static function getString($key, $min = 1, $max = 240)
    {
        $value = trim(self::get($key));
        if(!is_string($value) || !is_numeric($min) && !is_numeric($max))
        {
            $key = ucfirst($key);
            $key = str_replace('_', ' ', $key);
            throw new InvalidArgumentException("{$key} must be a string!");
        } else if (!self::setAndNotEmpty($key)) {
            throw new OutOfRangeException("{$key} must not be empty!");
        } else if (!is_string($key)) {
            throw new DomainException("{$key} must be a string type!");
        } else if (strlen($key) < $min || strlen($key) > $max) {
            throw new LengthException("{$key} must be within 1 to 240 characters long!");
        }
        return $value;
    }

    public static function getNumber($key, $min = 1, $max = 8)
    {
        $value = trim(self::get($key));
        if(!is_numeric($value))
        {
            $key = ucfirst($key);
            $key = str_replace('_', ' ', $key);
            throw new Exception("{$key} must be a number!");
        } else if (!self::setAndNotEmpty($key)) {
            throw new OutOfRangeException("{$key} must not be empty!");
        } else if ($key < $min || $key > $max) {
            throw new RangeException("{$key} must be between 1 and 8 numbers long!");
        }
        return $value;
    }

    public static function getDate($key)
    {
        $value = trim(self::get($key));
        try{
            $date = new DateTime($value);
        } catch (Exception $e) {
            $key = ucfirst($key);
            $key = str_replace('_', ' ', $key);
            throw new Exception("{$key} must be a valid date in the format of yyyy-mm-dd!");
        }
        return $value;
    }

    public static function escape($key)
    {
        return htmlspecialchars(strip_tags($key));
    }

    ///////////////////////////////////////////////////////////////////////////
    //                      DO NOT EDIT ANYTHING BELOW!!                     //
    // The Input class should not ever be instantiated, so we prevent the    //
    // constructor method from being called. We will be covering private     //
    // later in the curriculum.                                              //
    ///////////////////////////////////////////////////////////////////////////
    private function __construct() {}
}
