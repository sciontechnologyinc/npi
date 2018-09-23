<nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item nav-profile">
            <div class="nav-link">
              <div class="user-wrapper">
                <div class="profile-image">
                  <img src="{!! asset('/images/faces/face1.jpg') !!}" alt="profile image">
                </div>
                <div class="text-wrapper">
                  <p class="profile-name">Richard V.Welsh</p>
                  <div>
                    <small class="designation text-muted">Manager</small>
                    <span class="status-indicator online"></span>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="dashboard">
              <i class="menu-icon mdi mdi-television"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="menu-icon mdi mdi-content-copy"></i>
              <span class="menu-title">Website Home</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="pages/ui-features/buttons.html">Buttons</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="pages/ui-features/typography.html">Typography</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="companyinformations">
              <i class="menu-icon mdi mdi-backup-restore"></i>
              <span class="menu-title">Company Information</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="admincontactsubmissions">
              <i class="menu-icon mdi mdi-chart-line"></i>
              <span class="menu-title">Contact Submissions</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="adminfaq">
              <i class="menu-icon mdi mdi-comment-question-outline"></i>
              <span class="menu-title">FAQ</span>
            </a>
          </li>
        </ul>
      </nav>