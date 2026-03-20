

<div class="ems-stats">


  <div class="ems-sc ems-sc--blue">
    <div class="ems-sc__top">
      <span class="ems-sc__label">Total Employees</span>
      <div class="ems-sc__icon ems-ic--blue">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
          <circle cx="9" cy="7" r="4" />
          <path d="M3 21v-2a4 4 0 0 1 4-4h4a4 4 0 0 1 4 4v2" />
          <path d="M16 3.13a4 4 0 0 1 0 7.75" />
          <path d="M21 21v-2a4 4 0 0 0-3-3.85" />
        </svg>
      </div>
    </div>
    <div class="ems-sc__value" data-ems-count=""><?= $EmCount?></div>
    <div class="ems-sc__sub">

      No record
    </div>
  </div>


  <div class="ems-sc ems-sc--green">
    <div class="ems-sc__top">
      <span class="ems-sc__label">Present Today</span>
      <div class="ems-sc__icon ems-ic--green">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
          <path d="M9 11l3 3L22 4" />
          <path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11" />
        </svg>
      </div>
    </div>
    <div class="ems-sc__value" data-ems-count="">0</div>
    <div class="ems-sc__sub">
      <span class="ems-sc__badge ems-bdg--up">100%</span>
      attendance rate
    </div>
  </div>


  <div class="ems-sc ems-sc--amber">
    <div class="ems-sc__top">
      <span class="ems-sc__label">On Leave</span>
      <div class="ems-sc__icon ems-ic--amber">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
          <rect x="3" y="4" width="18" height="18" rx="2" />
          <line x1="16" y1="2" x2="16" y2="6" />
          <line x1="8" y1="2" x2="8" y2="6" />
          <line x1="3" y1="10" x2="21" y2="10" />
        </svg>
      </div>
    </div>
    <div class="ems-sc__value" data-ems-count="<?=0 ?>">0</div>
    <div class="ems-sc__sub">
      <span class="ems-sc__badge ems-bdg--warn">0 pending</span>
      approval
    </div>
  </div>


  <div class="ems-sc ems-sc--danger">
    <div class="ems-sc__top">
      <span class="ems-sc__label">Absent</span>
      <div class="ems-sc__icon ems-ic--danger">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
          <circle cx="12" cy="12" r="10" />
          <line x1="15" y1="9" x2="9" y2="15" />
          <line x1="9" y1="9" x2="15" y2="15" />
        </svg>
      </div>
    </div>
    <div class="ems-sc__value" data-ems-count="<?= 0 ?>">0</div>
    <div class="ems-sc__sub">

    </div>
  </div>

</div>