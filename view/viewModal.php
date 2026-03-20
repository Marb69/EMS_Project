<div class="vm-overlay" id="vmOverlay" onclick="if(event.target===this)vmClose()">
    <div class="vm-modal">
      <div class="vm-cover"></div>
      <div class="vm-head">
        <div style="display:flex;align-items:flex-end;gap:14px">
          <div class="vm-avatar" id="vmAvatar">JD</div>
          <div>
            <div class="vm-name" id="vmName">—</div>
            <div class="vm-role">
              <span id="vmPosition">—</span>
              <span style="color:#e5e7eb">·</span>
              <span id="vmDept">—</span>
            </div>
          </div>
        </div>
        <button class="vm-close" onclick="vmClose()">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>
        </button>
      </div>
      <div class="vm-body">
        <div class="vm-section-label">Employee Details</div>
        <div class="vm-grid">
          <div class="vm-item">
            <div class="vm-item-label">Employee ID</div>
            <div class="vm-item-value" id="vmId" style="font-family:'DM Mono',monospace;color:#2563eb">—</div>
          </div>
          <div class="vm-item">
            <div class="vm-item-label">Status</div>
            <div class="vm-item-value" id="vmStatus">—</div>
          </div>
          <div class="vm-item">
            <div class="vm-item-label">Date Hired</div>
            <div class="vm-item-value" id="vmHired">—</div>
          </div>
          <div class="vm-item">
            <div class="vm-item-label">Department</div>
            <div class="vm-item-value" id="vmDeptInfo">—</div>
          </div>
          <div class="vm-item vm-full">
            <div class="vm-item-label">Email Address</div>
            <div class="vm-item-value" id="vmEmail">—</div>
          </div>
          <div class="vm-item vm-full">
            <div class="vm-item-label">Phone Number</div>
            <div class="vm-item-value" id="vmPhone">—</div>
          </div>
        </div>
      </div>
      <div class="vm-footer">
        <button class="vm-btn vm-btn-ghost" onclick="vmClose()">Close</button>
        <a class="vm-btn vm-btn-primary" id="vmProfileLink" href="#">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/></svg>
          View Full Profile
        </a>
      </div>
    </div>
  </div>