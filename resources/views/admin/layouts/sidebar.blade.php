<!-- Page Sidebar Start-->
<div class="sidebar-wrapper">
  <div>
    <div class="logo-wrapper d-flex align-items-center gap-2">
      <a href="index.html" class="d-flex align-items-center">
        <img class="img-fluid for-light" src="{{ asset('/assets/images/BBMPlogo.png')}}" alt="">
        <img class="img-fluid for-dark" src="{{ asset('/assets/images/BBMPlogo.png')}}" alt="">
      </a>
      <h3 class="mb-0 ms-1 fw-bold">Project Management</h3>
      <div class="back-btn ms-3">
        <i class="fa fa-angle-left"></i>
      </div>
    </div>
    <nav class="sidebar-main">
      <div class="left-arrow" id="left-arrow">
        <i data-feather="arrow-left"></i>
      </div>
      <div id="sidebar-menu">
        <ul class="sidebar-links" id="simple-bar">
          <li class="back-btn">
            <a href="dashboard.html">
              <img class="img-fluid" src="{{ asset('/assets/images/logo-icon.png')}}" alt="">
            </a>
            <div class="mobile-back text-end">
              <span>Back</span>
            </div>
          </li>
          <li class="sidebar-list">
            <a class="sidebar-link sidebar-title link-nav active" href="{{ route('dashboard') }}">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g>
                  <g>
                    <path d="M9.07861 16.1355H14.8936" stroke="#130F26" stroke-width="1.5" stroke-linecap="round"
                      stroke-linejoin="round"></path>
                    <path fill-rule="evenodd" clip-rule="evenodd"
                      d="M2.3999 13.713C2.3999 8.082 3.0139 8.475 6.3189 5.41C7.7649 4.246 10.0149 2 11.9579 2C13.8999 2 16.1949 4.235 17.6539 5.41C20.9589 8.475 21.5719 8.082 21.5719 13.713C21.5719 22 19.6129 22 11.9859 22C4.3589 22 2.3999 22 2.3999 13.713Z"
                      stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                  </g>
                </g>
              </svg>
              <span class="active">Dashboard</span>
            </a>
          </li>
          <li class="sidebar-list">
            <a class="sidebar-link sidebar-title link-nav" href="street-details.html">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g>
                  <g>
                    <path d="M8.54248 9.21777H15.3975" stroke="#130F26" stroke-width="1.5" stroke-linecap="round"
                      stroke-linejoin="round"></path>
                    <path fill-rule="evenodd" clip-rule="evenodd"
                      d="M11.9702 2.5C5.58324 2.5 4.50424 3.432 4.50424 10.929C4.50424 19.322 4.34724 21.5 5.94324 21.5C7.53824 21.5 10.1432 17.816 11.9702 17.816C13.7972 17.816 16.4022 21.5 17.9972 21.5C19.5932 21.5 19.4362 19.322 19.4362 10.929C19.4362 3.432 18.3572 2.5 11.9702 2.5Z"
                      stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                  </g>
                </g>
              </svg>
              <span>Street Details</span>
            </a>
          </li>
          <li class="sidebar-list">
            <a class="sidebar-link sidebar-title link-nav" href="nearbyservices.html">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g>
                  <g>
                    <path d="M8.54248 9.21777H15.3975" stroke="#130F26" stroke-width="1.5" stroke-linecap="round"
                      stroke-linejoin="round"></path>
                    <path fill-rule="evenodd" clip-rule="evenodd"
                      d="M11.9702 2.5C5.58324 2.5 4.50424 3.432 4.50424 10.929C4.50424 19.322 4.34724 21.5 5.94324 21.5C7.53824 21.5 10.1432 17.816 11.9702 17.816C13.7972 17.816 16.4022 21.5 17.9972 21.5C19.5932 21.5 19.4362 19.322 19.4362 10.929C19.4362 3.432 18.3572 2.5 11.9702 2.5Z"
                      stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                  </g>
                </g>
              </svg>
              <span>NearBy Services</span>
            </a>
          </li>
          <li class="sidebar-list">
            <a class="sidebar-link sidebar-title" href="#">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g>
                  <g>
                    <path fill-rule="evenodd" clip-rule="evenodd"
                      d="M2.75024 12C2.75024 5.063 5.06324 2.75 12.0002 2.75C18.9372 2.75 21.2502 5.063 21.2502 12C21.2502 18.937 18.9372 21.25 12.0002 21.25C5.06324 21.25 2.75024 18.937 2.75024 12Z"
                      stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                    <path d="M15.2045 13.8999H15.2135" stroke="#130F26" stroke-width="2" stroke-linecap="round"
                      stroke-linejoin="round"></path>
                    <path d="M12.2045 9.8999H12.2135" stroke="#130F26" stroke-width="2" stroke-linecap="round"
                      stroke-linejoin="round"></path>
                    <path d="M9.19557 13.8999H9.20457" stroke="#130F26" stroke-width="2" stroke-linecap="round"
                      stroke-linejoin="round"></path>
                  </g>
                </g>
              </svg>
              <span class="">Masters</span>
            </a>
            <ul class="sidebar-submenu">
              <li>
                <a href="{{ route('corporation.index') }}">Corporation</a>
              </li>
              <li>
                <a href="{{ route('zone.index') }}">Zone</a>
              </li>
              <li>
                <a href="{{ route('constituency.index') }}">Constituency</a>
              </li>
              <li>
                <a href="{{ route('ward.index') }}">Ward</a>
              </li>
              <li>
                <a href="{{ route('user.index') }}">Users</a>
              </li>
            </ul>
          </li>
      </div>
      <div class="right-arrow" id="right-arrow">
        <i data-feather="arrow-right"></i>
      </div>
    </nav>
  </div>
</div>
<!-- Page Sidebar Ends-->