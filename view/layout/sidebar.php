<aside class="sidebar" id="sidebar">

    <div class="sidebar__brand">
        <div class="brand-icon">
            <svg viewBox="0 0 24 24">
                <path d="M12 2L2 7v10l10 5 10-5V7L12 2zm0 2.18L20 8.5v7l-8 4-8-4v-7l8-4.32z" />
            </svg>
        </div>
        <span class="brand-name">EMS</span>
    </div>


    <nav class="sidebar__nav">

        <div class="nav-section">
            <div class="nav-section__label">Overview</div>
            <a href="index.php?page=admin&section=overview" class="nav-item">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <rect x="3" y="3" width="7" height="7" rx="1" />
                    <rect x="14" y="3" width="7" height="7" rx="1" />
                    <rect x="3" y="14" width="7" height="7" rx="1" />
                    <rect x="14" y="14" width="7" height="7" rx="1" />
                </svg>
                Dashboard
            </a>
        </div>

        <div class="nav-section">
            <div class="nav-section__label">People</div>
            <a href="index.php?page=admin&section=employees" class="nav-item ">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <circle cx="9" cy="7" r="4" />
                    <path d="M3 21v-2a4 4 0 0 1 4-4h4a4 4 0 0 1 4 4v2" />
                    <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                    <path d="M21 21v-2a4 4 0 0 0-3-3.85" />
                </svg>
                Employees
               
            </a>
            <a href="index.php?page=admin&section=departments" class="nav-item ">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z" />
                    <polyline points="9 22 9 12 15 12 15 22" />
                </svg>
                Departments
            </a>
            <a href="index.php?page=admin&section=position" class="nav-item ">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M20 7H4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2z" />
                    <path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16" />
                </svg>
                Positions
            </a>

            <a href="index.php?page=admin&section=user" class="nav-item ">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-user-icon lucide-user">
                    <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2" />
                    <circle cx="12" cy="7" r="4" />
                </svg>
                User
            </a>
        </div>

        <div class="nav-section">
            <div class="nav-section__label">Time & Attendance</div>
            <a href="attendance.php" class="nav-item ">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <circle cx="12" cy="12" r="10" />
                    <polyline points="12 6 12 12 16 14" />
                </svg>
                Attendance
            </a>
            <a href="leaves.php" class="nav-item ">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <rect x="3" y="4" width="18" height="18" rx="2" />
                    <line x1="16" y1="2" x2="16" y2="6" />
                    <line x1="8" y1="2" x2="8" y2="6" />
                    <line x1="3" y1="10" x2="21" y2="10" />
                </svg>
                Leave Requests
                <span class="nav-badge danger">5</span>
            </a>

        </div>






    </nav>


    <div class="sidebar__user">
        <div class="user-avatar">AD</div>
        <div class="user-info">
            <div class="user-info__name"><?= htmlspecialchars($_SESSION['user']) ?></div>
            <div class="user-info__role"><?= htmlspecialchars($_SESSION['role']) ?></div>
        </div>
        <a href="./auth/logout.php" class="logout-btn" title="Logout">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4" />
                <polyline points="16 17 21 12 16 7" />
                <line x1="21" y1="12" x2="9" y2="12" />
            </svg>
        </a>
    </div>

</aside>