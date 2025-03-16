<?php
namespace Controller\DashBoard ;
use Database\DatabaseManger;
use PDO;

class DashboardController
{
    private $conn;

    public function __construct()
    {
        $this->conn = DatabaseManger::getConnection();
    }

    // دالة لجلب عدد الأطباء
    public function getDoctorsCount()
    {
        $sql = "SELECT COUNT(*) FROM doctors";
        $stmt = $this->conn->query($sql);
        return $stmt->fetchColumn();
    }
}