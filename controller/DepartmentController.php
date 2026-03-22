<?php




$DepartmentModel = new Department($conn);


$AllDept = $DepartmentModel->getAllDepartments();





$DeptCount       = $DepartmentModel->getCountOfDepartments();



 

?>