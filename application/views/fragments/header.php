<header class="main-header">
    <!-- Logo -->
    <a href="index.php/welcome/home" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>LT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Admin</b>LTE</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
				<?php  if($this->session->userdata('foto') != null && $this->session->userdata('foto') != '') : ?>
						<img src="images/profile/<?php echo $this->session->userdata('foto')?>" class="user-image" alt="User Image">
					<?php else: ?>
						<img src="images/user.png" class="user-image" alt="User Image">
					<?php endif; ?>
              <span class="hidden-xs"><?php echo $this->session->userdata('nama'); ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
				  <?php  if($this->session->userdata('foto') != null && $this->session->userdata('foto') != '') : ?>
					  <img src="images/profile/<?php echo $this->session->userdata('foto')?>" class="img-circle" alt="User Image">
				  <?php else: ?>
					  <img src="images/user.png" class="img-circle" alt="User Image">
				  <?php endif; ?>
                <p>
					<?php echo $this->session->userdata('nama'); ?>
                  <small>Joined on </small>
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#">Followers</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Sales</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Friends</a>
                  </div>
                </div>
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
					<?php  if($this->session->userdata('tipe_user') == 'admin') : ?>
						<a href="index.php/admin/logout" class="btn btn-default btn-flat">Logout</a>
					<?php else: ?>
						<a href="index.php/client/logout" class="btn btn-default btn-flat">Logout</a>
					<?php endif; ?>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
