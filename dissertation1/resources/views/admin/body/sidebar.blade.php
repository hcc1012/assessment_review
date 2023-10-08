<nav class="sidebar">
  <div class="sidebar-header">
    <a href="#" class="sidebar-brand">
      Aston<span>University</span>
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
        <a href="dashboard.html" class="nav-link">
          <i class="link-icon" data-feather="box"></i>
          <span class="link-title">Dashboard</span>
        </a>
      </li>
      <li class="nav-item nav-category">Edit data</li>
      <li class="nav-item">
        <a href="{{ route('admin.upload_csv') }}" class="nav-link">
          <i class="link-icon" data-feather="arrow-up-circle"></i>
          <span class="link-title">Upload CSV</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#software-emails" role="button" aria-expanded="false" aria-controls="software-emails">
          <i class="link-icon" data-feather="calendar"></i>
          <span class="link-title">View CSV</span>
          <i class="link-arrow" data-feather="chevron-down"></i>
        </a>
        <div class="collapse" id="software-emails">
          <ul class="nav sub-menu">
            <li class="nav-item">
              <a href="{{ route('admin.view_tutors') }}" class="nav-link">View Tutors</a>
            </li>   
            <li class="nav-item">
              <a href="{{ route('admin.view_modules') }}" class="nav-link">View Modules</a>
            </li>
          </ul>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#create-data" role="button" aria-expanded="false" aria-controls="create-data">
          <i class="link-icon" data-feather="file-plus"></i>
          <span class="link-title">Create data</span>
          <i class="link-arrow" data-feather="chevron-down"></i>
        </a>
        <div class="collapse" id="create-data">
          <ul class="nav sub-menu">
            <li class="nav-item">
              <a href="{{ route('admin.view_modules') }}"class="nav-link">Create Tutors</a>
            </li>
            <li class="nav-item">
              <a href="{{ route('admin.create_modules') }}" class="nav-link">Create Modules</a>
            </li>
          </ul>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#edit-data" role="button" aria-expanded="false" aria-controls="edit-data">
          <i class="link-icon" data-feather="edit"></i>
          <span class="link-title">Edit data</span>
          <i class="link-arrow" data-feather="chevron-down"></i>
        </a>
        <div class="collapse" id="edit-data">
          <ul class="nav sub-menu">
            <li class="nav-item">
              <a href="pages/email/inbox.html" class="nav-link">Edit Tutors</a>
            </li>
            <li class="nav-item">
            <a href="pages/email/inbox.html">Edit Modules</a>
            </li>
          </ul>
        </div>
      </li>
      
      <li class="nav-item">
  <a class="nav-link" data-bs-toggle="collapse" href="#delete-data" role="button" aria-expanded="false" aria-controls="delete-data">
    <i class="link-icon" data-feather="trash"></i>
    <span class="link-title">Delete data</span>
    <i class="link-arrow" data-feather="chevron-down"></i>
  </a>
  <div class="collapse" id="delete-data">
    <ul class="nav sub-menu">
      <li class="nav-item">
        <a href="pages/email/read.html" class="nav-link">Delete Tutors</a>
      </li>
      <li class="nav-item">
        <a href="pages/email/read.html" class="nav-link">Delete Modules</a>
      </li>
    </ul>
  </div>
</li>

<li class="nav-item">
  <a class="nav-link" data-bs-toggle="collapse" href="#form-test" role="button" aria-expanded="false" aria-controls="form-test">
    <i class="link-icon" data-feather="trash"></i>
    <span class="link-title">Manage</span>
    <i class="link-arrow" data-feather="chevron-down"></i>
  </a>
  <div class="collapse" id="form-test">
    <ul class="nav sub-menu">
      <li class="nav-item">
        <a href="pages/email/read.html" class="nav-link">Start New</a>
      </li>
      <li class="nav-item">
        <a href="pages/email/read.html" class="nav-link">Track Modules</a>
      </li>
    </ul>
  </div>
</li>

    </ul>
  </div>
</nav>
