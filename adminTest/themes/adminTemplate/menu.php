<header class="main-header">
  <a href="<?php echo base_url('admin')?>" class="logo">
    <span class="logo-mini"><b>TT</b></span>
    <span class="logo-lg"><b>TechTest</b></span>
  </a>
  <nav class="navbar navbar-static-top">
    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
      <span class="sr-only">Toggle navigation</span>
    </a>

    <div class="navbar-custom-menu">
      <ul class="nav navbar-nav">
        <li class="dropdown messages-menu">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <i class="fa fa-envelope-o"></i>
            <span class="label label-success">0</span>
          </a>
          <ul class="dropdown-menu">
            <li class="header">You have 0 messages</li>
            <li>
              <ul class="menu">
              </ul>
            </li>
            <li class="footer"><a href="#">See All Messages</a></li>
          </ul>
        </li>
        <li class="dropdown user user-menu">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <!-- <img src="<?php //echo assets_path();?>/images/logo-aplikasi-50x50.png" class="user-image" alt="User Image"> -->
            <span class="hidden-xs">TechTest</span>
          </a>
          <ul class="dropdown-menu">
            <li class="user-header">
              <!-- <img src="<?php //echo assets_path();?>/images/logo-aplikasi-50x50.png" class="img-circle" alt="User Image"> -->
              <p>
                TechTest - Team Developer
              </p>
            </li>
            <li class="user-footer">
              <div class="pull-left">
                <a href="#" class="btn btn-default btn-flat">Profile</a>
              </div>
              <div class="pull-right">
                <a href="<?php echo base_url('login/logout')?>" class="btn btn-default btn-flat">Sign out</a>
              </div>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </nav>
</header>
