<?php


class CreateMajorsTable
{
    public function up($conn)
    {

        $sql = "CREATE TABLE IF NOT EXISTS majors (
        id INT PRIMARY KEY AUTO_INCREMENT,
        name VARCHAR(100) NOT NULL
         )";

        $conn->exec($sql);
    }
}
