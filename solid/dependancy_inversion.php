<?php 

/* 
class MySQLConnection
{
    public function connect()
    {
        // handle the database connection
        return 'Database connection';
    }
}

class PasswordReminder
{
    private $dbConnection;

    public function __construct(MySQLConnection $dbConnection)
    {
        $this->dbConnection = $dbConnection;
    }
}

 */
interface DBConnectionInterface
{
    public function connect();
}

class MySQLConnection implements DBConnectionInterface
{

    public function connect()
    {
        return 'Mysql Database connection';
    }
}

class PostgresConnection implements DBConnectionInterface
{

    public function connect()
    {
        return 'Postgress Database connection';
    }
}

class PasswordReminder
{
    private $dbConnection;

    public function __construct(DBConnectionInterface $dbConnection)
    {
        $this->dbConnection = $dbConnection;
        echo $this->dbConnection->connect();
        // echo $this->dbConnection;
    }
}

$db = new PasswordReminder(new MySQLConnection());
$db = new PasswordReminder(new PostgresConnection());
