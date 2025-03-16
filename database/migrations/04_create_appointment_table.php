<?php


class CreateAppointmentTable
{
    public function up($conn)
    {
        
        $sql = "CREATE TABLE appointment (
        id INT PRIMARY KEY AUTO_INCREMENT,
        patient_name VARCHAR(100) NOT NULL,
        phone VARCHAR(20) NOT NULL,
        email VARCHAR(100) NOT NULL,
        date DATETIME NOT NULL,
        doc_id INT,
        FOREIGN KEY (doc_id) REFERENCES doctors(id) ON DELETE CASCADE
        )";

        $conn->exec($sql);

    }
}