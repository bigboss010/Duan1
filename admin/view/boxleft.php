  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index.php" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Admin </span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">
            <?php 
            echo $_SESSION['Username']['Username'];
            ?>
          </a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Tìm Kiếm" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li class="nav-item">
            <a href="index.php?act=qldanhmuctin" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Danh Mục Tin
                <!-- <i class="fas fa-angle-left right"></i> -->
              </p>
            </a>
                </li>

           <li class="nav-item">
            <a href="index.php?act=qltintuc" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Tin Tức
                <span class="right badge badge-danger">Mới</span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="index.php?act=qlgdt" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Gói Đăng Tin
                <!-- <i class="fas fa-angle-left right"></i> -->
                <!-- <span class="badge badge-info right">6</span> -->
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Thống Kê
                <!-- <i class="right fas fa-angle-left"></i> -->
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="index.php?act=qlthanhvien" class="nav-link">
              <i class="nav-icon fas fa-tree"></i>
              <p>
                Mua Gói
                <!-- <i class="fas fa-angle-left right"></i> -->
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="index.php?act=qlbinhluan" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Bình Luận
                <!-- <i class="fas fa-angle-left right"></i> -->
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="index.php?act=qltaikhoan" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Tài Khoản
                <!-- <i class="fas fa-angle-left right"></i> -->
              </p>
            </a>
           </li>
          </li>
          <li class="nav-item">
            <a href="index.php?act=qlnapcoins" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Nạp Coins
                <!-- <i class="fas fa-angle-left right"></i> -->
              </p>
            </a>
          </li>
          <li class="nav-header">Phản Hồi Từ Người Dùng</li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-circle text-danger"></i>
              <p class="text">Important</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-circle text-warning"></i>
              <p>Warning</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-circle text-info"></i>
              <p>Informational</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>