
<?php include './controller/PostionController.php' ?>

<div class="overlay" id="addModal" onclick="if(event.target===this)this.classList.remove('open')">


    <div class="modal">
        <div class="modal-head">
            <h2>Add New Employee</h2>
            <button class="modal-close" onclick="document.getElementById('addModal').classList.remove('open')">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <line x1="18" y1="6" x2="6" y2="18" />
                    <line x1="6" y1="6" x2="18" y2="18" />
                </svg>
            </button>
        </div>
        <form method="POST" action="./controller/EmployeeController.php">
            <div class="modal-body">
                <div class="fg">
                    <label>First Name</label>
                    <input type="text" name="first_name" placeholder="Juan" required />
                </div>
                <div class="fg">
                    <label>Last Name</label>
                    <input type="text" name="last_name" placeholder="Dela Cruz" required />
                </div>
                <div class="fg full">
                    <label>Email Address</label>
                    <input type="email" name="email" placeholder="juan@company.com" required />
                </div>
                <div class="fg">
                    <label>Department</label>
                    <select name="department">
                        <option value="">Select…</option>
                        <?php foreach($AllDept as $dept): ?>

                            <option value="<?= $dept['id'] ?>"><?= $dept['name'] ?></option>

                            <?php endforeach; ?>
                    </select>
                </div>
                <div class="fg">
                    <label>Position</label>
                       <select name="department">
                        <option value="">Select…</option>
                         
                        <?php  foreach($AllPostion as $position): ?>

                            <option value="<?= $position['id'] ?>"><?= $position['title'] ?></option>

                            <?php endforeach; ?>
                    </select>
                </div>
                <div class="fg">
                    <label>Date Hired</label>
                    <input type="date" name="date_hired" required />
                </div>
                <div class="fg">
                    <label>Status</label>
                    <select name="status">
                        <option value="Probationary">Probationary</option>
                        <option value="Active">Active</option>

                    </select>
                </div>

                 <div class="fg">
                    <label>Username</label>
                    <input type="text" name="username" placeholder="Enter username" required />
                </div>

                 <div class="fg">
                    <label>Password</label>
                    <input type="text" name="password" placeholder="Enter password" required />
                </div>

                  <div class="fg">
                    <label>Role</label>
                    <select name="role">
                     
                    <option>Select...</option>
                        <option value="employee">Employee</option>

                    </select>
                </div>

            </div>
            <div class="modal-foot">
                <button type="button" class="btn-em btn-ghost" onclick="document.getElementById('addModal').classList.remove('open')">Cancel</button>
                <button type="submit" class="btn-em btn-primary" name="add_employee">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <line x1="12" y1="5" x2="12" y2="19" />
                        <line x1="5" y1="12" x2="19" y2="12" />
                    </svg>
                    Save
                </button>
            </div>
        </form>
    </div>
</div>