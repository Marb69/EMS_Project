<?php
include './controller/DepartmentController.php';
include './controller/PostionController.php';


?>

<?php if (isset($error)): ?>
    <div class="alert alert-error"><?= htmlspecialchars($error) ?></div>
<?php endif; ?>

<main class="ae-main">


    <div class="ae-page-head">
        <a href="index.php?page=admin&section=employees" class="ae-back-btn">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                <polyline points="15 18 9 12 15 6" />
            </svg>
            Back
        </a>
        <span class="ae-dot">·</span>
        <h1>Add New Employee</h1>
    </div>

    <form method="POST" action="index.php?page=admin&section=add_employee" class="ae-form" id="add-employee-form">


        <div class="ae-card">
            <div class="ae-card-head">
                <div class="ae-card-icon ae-ci-blue">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <circle cx="12" cy="8" r="4" />
                        <path d="M4 20c0-4 3.6-7 8-7s8 3 8 7" />
                    </svg>
                </div>
                <div>
                    <div class="ae-card-title">Personal Information</div>
                    <div class="ae-card-sub">Basic details of the employee</div>
                </div>
            </div>
            <div class="ae-card-body">
                <div class="ae-grid">
                    <div class="ae-field">
                        <label>First Name</label>
                        <input type="text" name="first_name" placeholder="Juan" required />
                    </div>
                    <div class="ae-field">
                        <label>Last Name</label>
                        <input type="text" name="last_name" placeholder="Dela Cruz" required />
                    </div>
                    <div class="ae-field">
                        <label>Email Address</label>
                        <input type="email" name="email" placeholder="juan@company.com" required />
                    </div>
                    <div class="ae-field">
                        <label>Phone Number</label>
                        <input type="tel" name="phone" placeholder="+63 912 345 6789" />
                    </div>
                    <div class="ae-field ae-full">
                        <label>Address</label>
                        <input type="text" name="address" placeholder="123 Mabini St., Davao City" />
                    </div>
                </div>
            </div>
        </div>

        <div class="ae-card">
            <div class="ae-card-head">
                <div class="ae-card-icon ae-ci-green">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M20 7H4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2z" />
                        <path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16" />
                    </svg>
                </div>
                <div>
                    <div class="ae-card-title">Employment Details</div>
                    <div class="ae-card-sub">Job, salary, and schedule info</div>
                </div>
            </div>
            <div class="ae-card-body">
                <div class="ae-grid">
                    <div class="ae-field">
                        <label>Department</label>
                        <select name="department" required>
                            <option value="">Select department…</option>

                            <?php foreach ($AllDept as $dept): ?>
                                <option value="<?= $dept['id'] ?>"><?= $dept['name'] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="ae-field">
                        <label>Position</label>
                        <select name="position" id="" required>

                            <option value="">Select...</option>

                            <?php foreach ($AllPostion as $position): ?>
                                <option value="<?= $position['id'] ?>"><?= $position['title'] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="ae-field">
                        <label>Salary</label>
                        <input type="number" name="salary" placeholder="e.g. 25000" />
                    </div>
                    <div class="ae-field">
                        <label>Date Hired</label>
                        <input type="date" name="date_hired" required />
                    </div>
                    <div class="ae-field ae-full">
                        <label>Employment Status</label>
                        <select name="status" required>
                            <option value="Probationary">Probationary</option>
                            <option value="Active">Active</option>
                            <option value="Inactive">Inactive</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>


        <div class="ae-card">
            <div class="ae-card-head">
                <div class="ae-card-icon ae-ci-slate">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <rect x="3" y="11" width="18" height="11" rx="2" />
                        <path d="M7 11V7a5 5 0 0 1 10 0v4" />
                    </svg>
                </div>
                <div>
                    <div class="ae-card-title">Login Credentials</div>
                    <div class="ae-card-sub">Account access for the employee portal</div>
                </div>
            </div>
            <div class="ae-card-body">
                <div class="ae-grid">
                    <div class="ae-field">
                        <label>Username</label>
                        <input type="text" name="username" placeholder="e.g. jdelacruz" required />
                    </div>
                    <div class="ae-field">
                        <label>Role</label>
                        <select name="role">
                            <option value="employee">Employee</option>
                            <option value="admin">Admin</option>
                        </select>
                    </div>
                    <div class="ae-field ae-full">
                        <label>Password</label>
                        <div class="ae-pass-wrap">
                            <input type="password" name="password" id="ae-password" placeholder="Enter password" required />
                            <button type="button" class="ae-pass-toggle" id="ae-showPass" title="Show / hide">
                                <svg id="ae-eye" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z" />
                                    <circle cx="12" cy="12" r="3" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="ae-footer">
            <a href="index.php?page=admin&section=add_employee" class="ae-btn ae-btn-ghost">Cancel</a>
            <button type="submit" class="ae-btn ae-btn-primary">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M19 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11l5 5v11a2 2 0 0 1-2 2z" />
                    <polyline points="17 21 17 13 7 13 7 21" />
                    <polyline points="7 3 7 8 15 8" />
                </svg>
                Save Employee
            </button>
        </div>

    </form>

