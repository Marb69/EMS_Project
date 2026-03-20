

<div class="main-em">
    <div class="page-head">
        <div>
            <h1>Employees</h1>
            <p>Manage all employee records</p>
        </div>
        <a href="index.php?page=admin&section=add_employee" class="btn-em btn-primary">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <line x1="12" y1="5" x2="12" y2="19" />
                <line x1="5" y1="12" x2="19" y2="12" />
            </svg>
            Add Employee
        </a>
    </div>


    <div class="search-row">
        <div class="search-wrap">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <circle cx="11" cy="11" r="8" />
                <line x1="21" y1="21" x2="16.65" y2="16.65" />
            </svg>
            <input type="text" id="searchInput" placeholder="Search by name or ID…" />
        </div>
        <select class="filter-select" id="deptFilter">
            <option value="">All Departments</option>
            <option>Engineering</option>
            <option>Sales</option>
            <option>HR & Admin</option>
            <option>Operations</option>
            <option>IT</option>
        </select>
        <select class="filter-select" id="statusFilter">
            <option value="">All Status</option>
            <option>Active</option>
            <option>Probationary</option>
            <option>Inactive</option>
        </select>
    </div>


    <div class="table-card">
        <div class="table-wrap">
            <table>
                <thead>
                    <tr>
                        <th>Employee</th>
                        <th>Department</th>
                        <th>Position</th>
                        <th>Date Hired</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody id="empBody">


                    <?php foreach ($Employees as $Em): ?>



                        <tr data-dept="<?= 0 ?>" data-status="">
                            <td>
                                <div class="emp-cell">
                                    <div class="emp-av" style="background:#2263eb">AJ</div>
                                    <div>
                                        <div class="emp-name"><?= $Em['first_name'] ?></div>
                                        <div class="emp-id">#EMP-01</div>
                                    </div>
                                </div>
                            </td>
                            <td><span class="dept">IT </span></td>
                            <td style="color:var(--muted)">Staff</td>
                            <td style="font-family:'DM Mono',monospace;font-size:12px;color:var(--muted)">March,20,2026</td>
                            <td><span class="pill <?= 'Active' === "Active" ? 'pill-active' : 'pill-inactive' ?>">Active</span></td>
                            <td>
                                <div class="actions">
                                    <a href="employee_profile.html" class="act act-view" title="View">
                                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                            <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z" />
                                            <circle cx="12" cy="12" r="3" />
                                        </svg>
                                    </a>
                                    <button class="act act-edit" title="Edit">
                                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                            <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7" />
                                            <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4z" />
                                        </svg>
                                    </button>
                                    <button class="act act-del" title="Delete">
                                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                            <polyline points="3 6 5 6 21 6" />
                                            <path d="M19 6l-1 14a2 2 0 0 1-2 2H8a2 2 0 0 1-2-2L5 6" />
                                            <path d="M10 11v6" />
                                            <path d="M14 11v6" />
                                        </svg>
                                    </button>
                                </div>
                            </td>
                        </tr>


                    <?php endforeach; ?>








                </tbody>
            </table>

            <div class="empty" id="emptyState" style="display:none">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                    <circle cx="11" cy="11" r="8" />
                    <line x1="21" y1="21" x2="16.65" y2="16.65" />
                </svg>
                <p>No employees found matching your search.</p>
            </div>
        </div>
    </div>




</div>

