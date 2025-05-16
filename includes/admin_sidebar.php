  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="../index.php" class="brand-link d-flex justify-content-center align-items-center">
          <span class="brand-text font-weight-light font-weight-bold">BMN BBKSDA PAPUA</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">

          <!-- Sidebar Menu -->
          <nav class="mt-2">
              <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                  data-accordion="false">
                  <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li class="nav-item">
                <a href="dashboard.php" class="nav-link <?= isActive('dashboard.php') ?>">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>Dashboard</p>
                </a>
                </li>
                <li class="nav-item">
                <a href="data-penyakit.php" class="nav-link <?= isActive('data-penyakit.php') ?>">
                    <i class="nav-icon fas fa-bug"></i>
                    <p>Data Penyakit</p>
                </a>
                </li>
                <li class="nav-item">
                <a href="data-basis-kasus.php" class="nav-link <?= isActive('data-basis-kasus.php') ?>">
                    <i class="nav-icon fas fa-notes-medical"></i>
                    <p>Data Basis Kasus</p>
                </a>
                </li>
                <li class="nav-item">
                <a href="data-gejala.php" class="nav-link <?= isActive('data-gejala.php') ?>">
                    <i class="nav-icon fas fa-database"></i>
                    <p>Data Gejala</p>
                </a>
                </li>
              </ul>
          </nav>
          <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">