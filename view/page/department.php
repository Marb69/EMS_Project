 <div class="page-head">
        <div>
            <h1>Departments</h1>
            <p>Manage all departments</p>
        </div>
        <button class="btn-em btn-primary" id="btnAddDept" type="button">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <line x1="12" y1="5" x2="12" y2="19" />
                <line x1="5" y1="12" x2="19" y2="12" />
            </svg>
            Add Department
        </button>
    </div>

    <div class="search-row">
        <div class="search-wrap">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <circle cx="11" cy="11" r="8" />
                <line x1="21" y1="21" x2="16.65" y2="16.65" />
            </svg>
            <input type="text" id="searchInput" placeholder="Search department…" />
        </div>
    </div>

    <div class="table-card">
        <div class="table-wrap">
            <table>
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Department Name</th>
                        <th>Description</th>
                        <th>Total Employees</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody id="deptBody">
                    <?php foreach ($AllDept as $index => $dept): ?>
                        <tr>
                            <td style="font-family:'DM Mono',monospace;font-size:12px;color:var(--muted)">
                                <?= str_pad($index + 1, 2, '0', STR_PAD_LEFT) ?>
                            </td>
                            <td>
                                <div class="emp-cell">
                                    <div class="emp-av" style="background:#2263eb">
                                        <?= strtoupper(mb_substr($dept['name'], 0, 2)) ?>
                                    </div>
                                    <div class="emp-name"><?= htmlspecialchars($dept['name']) ?></div>
                                </div>
                            </td>
                            <td style="color:var(--muted)"><?= htmlspecialchars($dept['description'] ?? '—') ?></td>
                            <td>
                                <span class="pill pill-active">
                                    <?= $DepartmentModel->getEmployeeCountByDepartment($dept['id']) ?> employees
                                </span>
                            </td>
                            <td>
                                <div class="actions">
                                    <button class="act act-edit btn-edit-dept" type="button"
                                            title="Edit"
                                            data-id="<?= (int)$dept['id'] ?>"
                                            data-name="<?= htmlspecialchars($dept['name']) ?>"
                                            data-description="<?= htmlspecialchars($dept['description'] ?? '') ?>">
                                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                            <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7" />
                                            <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4z" />
                                        </svg>
                                    </button>
                                    <button class="act act-del btn-del-dept" type="button"
                                            title="Delete"
                                            data-id="<?= (int)$dept['id'] ?>">
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
                <p>No departments found.</p>
            </div>
        </div>
    </div>