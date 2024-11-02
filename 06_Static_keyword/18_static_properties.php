<?php

// Static properties belongs to the class itself rather than an object.

class Connection {
    private static int $con_count = 0;

    // Increment the connection count property ($con_count) whenever a new instance of this class is created;

    public function __construct()
    {
        self::$con_count++;
    }

    // Static method to get the private static property
    public static function getConnectionCount() : int
    {
        return self::$con_count;
    }

}

$connection1 = new Connection();
$connection1 = new Connection();
$connection1 = new Connection();
$connection1 = new Connection();

print Connection::getConnectionCount();