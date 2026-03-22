<?php



class Department
{


  private $conn;

  public function __construct($conn)
  {

    $this->conn = $conn;
  }



  public function getEmployeeCountByDepartment(int $departmentId): int
  {
    $stmt = $this->conn->prepare("SELECT COUNT(*) as total FROM employees WHERE department_id = :id");
    $stmt->execute([':id' => $departmentId]);
    return (int) $stmt->fetch(PDO::FETCH_ASSOC)['total'];
  }

  public function getCountOfDepartments(): int
  {
    $stmt = $this->conn->prepare("SELECT COUNT(*) as total FROM departments");
    $stmt->execute();
    return (int) $stmt->fetch(PDO::FETCH_ASSOC)['total'];
  }

  public function getDepartmentById($id)
  {


    $stmt = $this->conn->prepare("SELECT * FROM departments WHERE id = ?");
    $stmt->execute([$id]);

    return $stmt->fetch(PDO::FETCH_ASSOC);
  }

  public function getAllDepartments()
  {



    $stmt = $this->conn->prepare('SELECT * FROM departments');
    $stmt->execute();

    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }
}
