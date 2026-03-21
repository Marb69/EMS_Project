<?php



$EmployeeModel = new Employee($conn);





$data = json_decode(file_get_contents("php://input"), true);

if (isset($data['id'])) {
    $id = intval($data['id']);

    echo $id;
    $result = $EmployeeModel->deleteEmployee($id);

    echo json_encode(["success" => $result]);
}
