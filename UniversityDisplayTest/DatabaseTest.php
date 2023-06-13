<?php
// Include the code to be tested
require 'course_details.php';

class DatabaseTest extends PHPUnit_Framework_TestCase {

    public function testDatabaseConnection() {
        // Establish a database connection
        $servername = "localhost";
        $username = "root";
        $password = "root";
        $dbname = "UniversityDisplay";
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check if the connection was successful
        $this->assertTrue($conn->connect_errno === 0);
    }
}
?>