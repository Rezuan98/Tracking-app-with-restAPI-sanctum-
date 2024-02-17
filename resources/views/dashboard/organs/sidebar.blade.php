<nav class="sidebar">
    <div class="sidebar-header">
      <a href="" class="sidebar-brand">
        Admin<span>FIT</span>
      </a>
      <div class="sidebar-toggler not-active">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
    <div class="sidebar-body">
      <ul class="nav">
        <li class="nav-item nav-category">Main</li>
        <li class="nav-item">
          <a href="" class="nav-link">
            <i class="link-icon" data-feather="box"></i>
            <span class="link-title">Dashboard</span>
          </a>
        </li>



        <li class="nav-item nav-category">Marketing Team</li>

        <li class="nav-item">
          <a class="nav-link" data-bs-toggle="collapse" href="#emails" role="button" aria-expanded="false" aria-controls="emails">
            <i class="link-icon" data-feather="mail"></i>
            <span class="link-title">Marketers</span>
            <i class="link-arrow" data-feather="chevron-down"></i>
          </a>
          <div class="collapse" id="emails">
            <ul class="nav sub-menu">
              <li class="nav-item">
                <a href="{{route('add.marketer')}}" class="nav-link">Add Marketer</a>
              </li>
              <li class="nav-item">
                <a href="{{route('all.marketer')}}" class="nav-link">All Markers</a>
              </li>
             
            </ul>
          </div>
        </li>



        <li class="nav-item">
          <a href="#email" data-bs-toggle="collapse" role="button" aria-expanded="false" class="nav-link" aria-controls="email">
            <i class="link-icon" data-feather="message-square"></i>
            <span class="link-title">Area Managers</span>
           
          </a>
          
        </li>
        <li class="nav-item">
          <a href="pages/apps/calendar.html" class="nav-link">
            <i class="link-icon" data-feather="calendar"></i>
            <span class="link-title">Admin Panel
            </span>
          </a>
        </li>
        <li class="nav-item nav-category">Components</li>
        <li class="nav-item">
          <a class="nav-link" data-bs-toggle="collapse" href="#uiComponents" role="button" aria-expanded="false" aria-controls="uiComponents">
            <i class="link-icon" data-feather="feather"></i>
            <span class="link-title">Developers Team</span>
            <i class="link-arrow" data-feather="chevron-down"></i>
          </a>
          <div class="collapse" id="uiComponents">
            <ul class="nav sub-menu">
              <li class="nav-item">
                <a href="pages/ui-components/accordion.html" class="nav-link">UI/XI</a>
              </li>
              <li class="nav-item">
                <a href="pages/ui-components/alerts.html" class="nav-link">Frontend</a>
              </li>
              <li class="nav-item">
                <a href="pages/ui-components/alerts.html" class="nav-link">Backend</a>
              </li>
             
            </ul>
          </div>
        </li>
        
       
        
        
        
        
       
       
        <li class="nav-item nav-category">Documents</li>
        <li class="nav-item">
          <a href="https://www.nobleui.com/html/documentation/docs.html" target="_blank" class="nav-link">
            <i class="link-icon" data-feather="hash"></i>
            <span class="link-title">Documentation</span>
          </a>
        </li>
      </ul>
    </div>
  </nav>