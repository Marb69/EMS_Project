<?php

header('Content-Type: application/json');


require_once __DIR__ . '/../config/db.php';
require_once __DIR__ . '/../model/Employee.php';

$EmployeeModel = new Employee($conn);

$raw  = file_get_contents('php://input');
$data = json_decode($raw, true);


if (empty($raw)) {
    echo json_encode(['success' => false, 'debug' => 'php://input is empty — body never arrived']);
    exit();
}
if ($data === null) {
    echo json_encode(['success' => false, 'debug' => 'json_decode failed', 'raw' => $raw]);
    exit();
}
// ------------------------------------------------------

if (!isset($data['id'])) {
    http_response_code(400);
    echo json_encode(['success' => false, 'message' => 'Missing employee ID.']);
    exit();
}

$id = intval($data['id']);

if ($id <= 0) {
    http_response_code(400);
    echo json_encode(['success' => false, 'message' => 'Invalid employee ID.']);
    exit();
}

$result = $EmployeeModel->deleteEmployee($id);

if ($result) {
    echo json_encode(['success' => true, 'message' => 'Employee deleted successfully.']);
} else {
    http_response_code(500);
    echo json_encode(['success' => false, 'message' => 'Failed to delete employee.']);
}