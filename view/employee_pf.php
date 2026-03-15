

<?php 

include './config/db.php';
include './model/Employee.php';
include './model/Department.php';


   $employeeModel = new Employee($conn);
   $employee = $employeeModel->getEmployeeById($_SESSION['user_id']);


   $departmentModel = new Department($conn);
   $department = $departmentModel->getDepartmentById($employee['department']);



?>


<header class="header-pf">
    <div class="header-inner-pf">
        <a class="brand-pf" href="#">
           
            <span class="brand-name-pf">EMS</span>
        </a>

        <div class="header-right-pf">
            <div class="welcome-pill-pf">
           
                <span>Welcome, <strong><?= $employee['name'] ?></strong></span>
            </div>

            <form method="POST" action="./auth/logout.php">
                <button type="submit" class="btn-logout-pf">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4" />
                        <polyline points="16 17 21 12 16 7" />
                        <line x1="21" y1="12" x2="9" y2="12" />
                    </svg>
                    Logout
                </button>
            </form>
        </div>
    </div>
</header>

<main class="main-profile">
    <div class="card full">
    <div class="card-header">
      <div class="card-header-icon icon-blue">
        <svg width="16" height="16" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
          <path stroke-linecap="round" stroke-linejoin="round"
            d="M5.121 17.804A9 9 0 1118.88 6.196M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
        </svg>
      </div>
      <div>
        <div class="card-title">Employee Information</div>
        <div class="card-subtitle">Your current profile details</div>
      </div>
    </div>
    <div class="card-body">
      <div class="info-grid">
        <div class="info-item">
          <div class="info-label">Employee ID</div>
          <div class="info-value mono">#<?=$employee['user_id'] ?></div>
        </div>
        <div class="info-item">
          <div class="info-label">Full Name</div>
          <div class="info-value"><?=$employee['name']?></div>
        </div>
        <div class="info-item">
          <div class="info-label">Email</div>
          <div class="info-value"><?=$employee['contact'] ?></div>
        </div>
        <div class="info-item">
          <div class="info-label">Department</div>
          <div class="info-value"><span class="badge badge-blue"><?=$department['department'] ?></span></div>
        </div>
        <div class="info-item">
          <div class="info-label">Position</div>
          <div class="info-value"><?= $employee['position'] ?></div>
        </div>
        <div class="info-item">
          <div class="info-label">Date Hired</div>
          <div class="info-value"><?= $employee['date_hired']  ?></div>
        </div>
      </div>
    </div>
  </div>
 
</main>