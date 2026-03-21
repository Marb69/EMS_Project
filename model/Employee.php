<?php

class Employee
{
    private PDO $conn;

    public function __construct(PDO $db)
    {
        $this->conn = $db;
    }

    public function deleteEmployee(int $id): bool
    {
        $stmt = $this->conn->prepare("DELETE FROM employees WHERE id = :id");
        return $stmt->execute([':id' => $id]);
    }

    public function getCountOfEmployee(): int
    {
        $stmt = $this->conn->prepare("SELECT COUNT(*) as total FROM employees");
        $stmt->execute();
        return (int) $stmt->fetch(PDO::FETCH_ASSOC)['total'];
    }

    public function getEmployeeByEmail(string $email): array|false
    {
        $stmt = $this->conn->prepare("SELECT * FROM employees WHERE email = :email");
        $stmt->execute([':email' => $email]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function getEmployeeByName(string $fname, string $lname): array|false
    {
        $stmt = $this->conn->prepare(
            "SELECT * FROM employees WHERE first_name = :fname AND last_name = :lname"
        );
        $stmt->execute([':fname' => $fname, ':lname' => $lname]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function getEmployeeById(int $id): array|false
    {
        $stmt = $this->conn->prepare("SELECT * FROM employees WHERE id = :id");
        $stmt->execute([':id' => $id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function getAllEmployee(): array
    {
        $stmt = $this->conn->prepare("SELECT * FROM employees");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function addEmployee(
        string $first_name,
        string $last_name,
        string $email,
        string $phone,
        string $address,
        int    $department,
        int    $position,
        float  $salary,
        string $date_hired,
        string $status
    ): bool {
        $sql = "INSERT INTO employees
                    (first_name, last_name, email, phone, address, department_id, position_id, salary, date_hired, status)
                VALUES
                    (:firstname, :lastname, :email, :phone, :address, :departmentId, :positionId, :salary, :date_hired, :status)";

        $stmt = $this->conn->prepare($sql);

      
        return $stmt->execute([
            ':firstname'    => $first_name,
            ':lastname'     => $last_name,
            ':email'        => $email,
            ':phone'        => $phone,
            ':address'      => $address,
            ':departmentId' => $department,
            ':positionId'   => $position,
            ':salary'       => $salary,
            ':date_hired'   => $date_hired,
            ':status'       => $status,
        ]);
    }
}