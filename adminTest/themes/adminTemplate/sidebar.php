
<aside class="main-sidebar">
  <section class="sidebar">
    <ul class="sidebar-menu">
      <li class="header">MENU UTAMA</li>
      <?php $uri = $this->uri->segment(1); ?>
      <li class="<?php echo ($uri == 'admin') ? 'active' : ''?>"><a href="<?php echo base_url('admin')?>"><i class="fa fa-home"></i> <span>Dashboard</span></a></li>
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>
