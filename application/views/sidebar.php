<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
<!-- Brand Logo -->
<a href="index3.html" class="brand-link">
    <img src="<?php echo base_url(); ?>assets/AdminLTE/dist/img/logo.png" alt="Logo" class="brand-image img-circle elevation-3"
        style="opacity: .8">
    <span class="brand-text font-weight-light">Hello World!</span>
</a>

<!-- Sidebar -->
<div class="asidebar">
    <!-- Sidebar Menu -->
    <nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
        with font-awesome or any other icon font library -->
        <li class="nav-item">
        <a href="<?php echo base_url(); ?>index.php/controller/index" class="nav-link <?php if($this->uri->segment(2)=="index"){echo "active";}?>">
            <i class="nav-icon fas fa-code"></i>
            <p>
            Framework
            </p>
        </a>
        </li>
        <li class="nav-item">
        <a href="<?php echo base_url(); ?>index.php/controller/mvc" class="nav-link <?php if($this->uri->segment(2)=="mvc"){echo "active";}?>">
            <i class="nav-icon fas fa-file-code"></i>
            <p>
            MVC
            </p>
        </a>
        </li>
        <li class="nav-item">
        <a href="<?php echo base_url(); ?>index.php/controller/ci" class="nav-link <?php if($this->uri->segment(2)=="ci"){echo "active";}?>">
            <i class="nav-icon fab fa-free-code-camp"></i>
            <p>
            Codeigniter
            </p>
        </a>
        </li>
        <li class="nav-item">
        <a href="<?php echo base_url(); ?>index.php/controller/tutorial" class="nav-link <?php if($this->uri->segment(2)=="tutorial"){echo "active";}?>">
            <i class="nav-icon fas fa-laptop-code"></i>
            <p>
            Tutorial
            </p>
        </a>
        </li>
    </ul>
    </nav>
    <!-- /.sidebar-menu -->
</div>
<!-- /.sidebar -->
</aside>