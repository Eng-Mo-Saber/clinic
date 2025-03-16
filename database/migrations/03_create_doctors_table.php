<?php


class CreateDoctorsTable
{
    public function up($conn)
    {

        $sql = "CREATE TABLE doctors (
        id INT PRIMARY KEY AUTO_INCREMENT,
        name VARCHAR(100) NOT NULL,
        description text NOT NULL,
        phone VARCHAR(20) UNIQUE NOT NULL,
        email VARCHAR(100) UNIQUE NOT NULL,
        password VARCHAR(255) NOT NULL,
        major_id INT,
        FOREIGN KEY (major_id) REFERENCES majors(id) ON DELETE SET NULL
        )";

        $conn->exec($sql);
    }
}
