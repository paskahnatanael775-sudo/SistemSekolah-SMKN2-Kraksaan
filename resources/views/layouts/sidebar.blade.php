  <div class="sidebar-wrapper" id="sidebar">
    <!-- Brand Logo / Identity -->
    <a href="index.html" class="sidebar-brand">
      <i class="bi bi-asterisk"></i>
      <span>Sistem Sekolah</span>
    </a>

      <!-- Group: Components -->
      <div class="sidebar-menu-section">
        <div class="sidebar-menu-title">Components</div>
        <ul class="sidebar-menu-list">
          <li class="sidebar-menu-item {{ Request::is('murid')? 'active' : ''}}">
            <a href="/murid" class="sidebar-menu-link" id="menu-basictables" title="Basic Tables">
              <i class="bi bi-table"></i>
              <span>Murid</span>
            </a>
          </li>

          <li class="sidebar-menu-item {{ Request::is('guru')? 'active' : ''}}">
            <a href="/guru" class="sidebar-menu-link" id="menu-uiforms" title="Forms and Input">
              <i class="bi bi-input-cursor-text"></i>
              <span>Guru</span>
            </a>
          </li>

          <li class="sidebar-menu-item {{ Request::is('kelas')? 'active' : ''}}">
            <a href="/kelas" class="sidebar-menu-link" id="menu-uiforms" title="Forms and Input">
              <i class="bi bi-input-cursor-text"></i>
              <span>Kelas</span>
            </a>
          </li>

          <li class="sidebar-menu-item {{ Request::is('jurusan')? 'active' : ''}}">
            <a href="/jurusan" class="sidebar-menu-link" id="menu-uiforms" title="Forms and Input">
              <i class="bi bi-input-cursor-text"></i>
              <span>Jurusan</span>
            </a>
          </li>

          <li class="sidebar-menu-item {{ Request::is('jadwal')? 'active' : ''}}">
            <a href="/jadwal" class="sidebar-menu-link active" id="menu-uibuttons" title="Buttons">
              <i class="bi bi-menu-button-wide-fill"></i>
              <span>Jadwal</span>
            </a>
          </li>
        </ul>
    </div>

    <!-- Sidebar Profile Card (Dynamic Footer) -->
    <div class="sidebar-profile">
      <img src="assets/images/avatar.png" alt="Administrator" class="sidebar-profile-img"
        onerror="this.src='https://images.unsplash.com/photo-1534528741775-53994a69daeb?q=80&w=256&auto=format&fit=crop'">
      <div class="sidebar-profile-info">
        <div class="sidebar-profile-name">Administrator</div>
        <div class="sidebar-profile-email">admin@email.com</div>
      </div>
    </div>
  </div>
