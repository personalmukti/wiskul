  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?= base_url('dashboard'); ?>" class="brand-link">
      <img src="<?= base_url(); ?>assets/image/logowk.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Wisata Kuliner Kerkof</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?= base_url(); ?>assets/profil/user.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="<?= base_url('account-manager'); ?>" class="d-block">Administrator</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="<?= base_url('dashboard'); ?>" class="nav-link <?php echo $mhome; ?>">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Beranda
              </p>
            </a>
          </li>
          <li class="nav-header">Content Management</li>
          <li class="nav-item">
            <a href="<?= base_url('stand-manager'); ?>" class="nav-link <?php echo $mstand; ?>">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Manajemen Stand
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('menu-manager'); ?>" class="nav-link <?php echo $mmenu; ?>">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Manajemen Menu
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link <?php echo $mbarcode; ?>">
              <i class="nav-icon fas fa-qrcode"></i>
              <p>
                Manajemen Barcode
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url('qr-prime'); ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>QR Code Utama</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('qr-stand'); ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>QR Code Stand</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('gallery-manager'); ?>" class="nav-link <?php echo $mgaleri; ?>">
              <i class="nav-icon fas fa-image"></i>
              <p>
                Manajemen Galeri
              </p>
            </a>
          </li>
          <li class="nav-header">Account Management</li>
          <li class="nav-item">
            <a href="<?= base_url('account-manager'); ?>" class="nav-link <?php echo $mprofil; ?>">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Profil
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('settings'); ?>" class="nav-link <?php echo $msetting; ?>">
              <i class="nav-icon fas fa-cog"></i>
              <p>
                Pengaturan
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('logout'); ?>" class="nav-link">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>
                Logout
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>