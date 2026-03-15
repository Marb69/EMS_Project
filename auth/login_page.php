<div class="page">

  <div class="login-panel">

    <!-- Brand -->
    <div class="brand">
      <div class="brand-icon">
        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
          <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" />
          <circle cx="9" cy="7" r="4" />
          <path d="M23 21v-2a4 4 0 0 0-3-3.87" />
          <path d="M16 3.13a4 4 0 0 1 0 7.75" />
        </svg>
      </div>
      <div class="brand-text">
        <div class="brand-title">Employee MS</div>
        <div class="brand-sub">Management System</div>
      </div>
    </div>


    <div class="heading">
      <h1>Welcome back 👋</h1>
      <p>Sign in to access your dashboard</p>
    </div>


    <div class="error-msg" id="errorMsg" role="alert">
      <svg width="15" height="15" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
        <circle cx="12" cy="12" r="10" />
        <line x1="12" y1="8" x2="12" y2="12" />
        <line x1="12" y1="16" x2="12.01" y2="16" />
      </svg>
      <span id="errorText"><?php if (!empty($error)) echo htmlspecialchars($error); ?></span>
    </div>


    <form action="./auth/login_pro.php" method="POST" id="loginForm" novalidate>



      <input type="hidden" name="role" id="roleInput" value="employee" />


      <div class="field">
        <label>Sign in as</label>
        <div class="role-toggle">
          <button type="button" class="role-btn active" id="btnEmployee" data-role="employee">
            <svg width="15" height="15" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
              <circle cx="12" cy="8" r="4" />
              <path d="M4 20c0-4 3.6-7 8-7s8 3 8 7" />
            </svg>
            Employee
          </button>
          <button type="button" class="role-btn" id="btnAdmin" data-role="admin">
            <svg width="15" height="15" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
              <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" />
            </svg>
            Admin
          </button>
        </div>
      </div>

      <div class="field">
        <label for="username">Username</label>
        <div class="input-wrap">
          <span class="icon">
            <svg width="15" height="15" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
              <circle cx="12" cy="8" r="4" />
              <path d="M4 20c0-4 3.6-7 8-7s8 3 8 7" />
            </svg>
          </span>
          <input
            type="text"
            id="username"
            name="username"
            placeholder="Enter your username"
            autocomplete="username"
            required
            value="<?php echo isset($_POST['username']) ? htmlspecialchars($_POST['username']) : ''; ?>" />
        </div>
      </div>

      <div class="field">
        <label for="password">Password</label>
        <div class="input-wrap">
          <span class="icon">
            <svg width="15" height="15" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
              <rect x="3" y="11" width="18" height="11" rx="2" />
              <path d="M7 11V7a5 5 0 0 1 10 0v4" />
            </svg>
          </span>
          <input
            type="password"
            id="password"
            name="password"
            placeholder="Enter your password"
            autocomplete="current-password"
            required />
          <button type="button" class="toggle-pw" id="togglePw" aria-label="Show/hide password">
            <svg id="eyeIcon" width="16" height="16" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
              <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z" />
              <circle cx="12" cy="12" r="3" />
            </svg>
          </button>
        </div>
      </div>

      <button type="submit" class="btn">Sign In</button>

    </form>

    <div class="login-footer">
      Need help?  <strong>Pass di ko</strong>.
    </div>

   

  </div>


  <div class="image-panel">


    <img src="./assets/images/loginimage.png" alt="Team working together" />

    <div class="image-content">
      <div class="image-badge"><span></span> Workforce Platform</div>

      <h2>Manage your team <em>smarter</em> and faster</h2>

      <p>A centralized platform to manage employee records, attendance, payroll, and performance — all in one place.</p>

      <div class="team-label">— Development Team</div>

      <div class="team-list">

        <div class="team-item">
          <div class="team-avatar">MJ</div>
          <div class="team-info">
            <div class="team-name">Marbebe Jhon Alvert M.</div>
            <div class="team-role">Lead Developer</div>
          </div>
          <span class="role-badge role-dev">Dev</span>
        </div>

        <div class="team-item">
          <div class="team-avatar">CC</div>
          <div class="team-info">
            <div class="team-name">Cabistante Chin</div>
            <div class="team-role">UI/UX Designer</div>
          </div>
          <span class="role-badge role-des">Design</span>
        </div>

        <div class="team-item">
          <div class="team-avatar">PK</div>
          <div class="team-info">
            <div class="team-name">Polosan Keith</div>
            <div class="team-role">QA Tester</div>
          </div>
          <span class="role-badge role-test">QA</span>
        </div>

      </div>
    </div>

  </div>

</div>