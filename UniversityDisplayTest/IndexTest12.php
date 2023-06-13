<?php
class IndexTest12 extends \PHPUnit\Framework\TestCase
{
    private $conn;

    protected function setUp(): void
    {
        $this->conn = mysqli_connect("localhost", "root", "root", "UniversityDisplay");
        if (!$this->conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
    }

    protected function tearDown(): void
    {
        mysqli_close($this->conn);
    }

    public function testDatabaseConnection()
    {
        $this->assertNotNull($this->conn, "Could not connect to the database.");
    }

    public function testCoursesOfStudyList()
    {
        $sql = "SELECT DISTINCT course_of_study FROM course_schedule";
        $result = mysqli_query($this->conn, $sql);

        $this->assertGreaterThan(0, mysqli_num_rows($result), "There are no courses of study in the database.");

        while ($row = mysqli_fetch_assoc($result)) {
            $course_of_study = $row['course_of_study'];
            $this->assertNotEmpty($course_of_study, "Course of study name is empty.");
        }
    }
}
?>