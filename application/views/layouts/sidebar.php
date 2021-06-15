<!-- Page Wrapper -->
<div id="wrapper">

	<!-- Sidebar -->
	<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

		<!-- Sidebar - Brand -->
		<a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo base_url() ?>">
			<div class="sidebar-brand-text mx-3">Codeme</div>
		</a>

		<!-- Divider -->
		<hr class="sidebar-divider my-0">

		<!-- Nav Item - Dashboard -->
		<li class="nav-item active">
			<a class="nav-link" href="<?php echo base_url('home') ?>">
				<i class="fas fa-fw fa-tachometer-alt"></i>
				<span>Dashboard</span></a>
		</li>

		<!-- Nav Item - Posts -->
		<li class="nav-item active">
			<a class="nav-link" href="<?php echo base_url('post') ?>">
				<i class="fa fa-fw fa-layer-group"></i>
				<span>Posts</span></a>
		</li>

		<!-- Nav Item - My Posts -->
		<li class="nav-item active">
			<a class="nav-link" href="<?php echo base_url('post/my') ?>">
				<i class="fas fa-fw fa-book"></i>
				<span>My Posts</span></a>
		</li>

		<!-- Divider -->
		<hr class="sidebar-divider">

		<!-- Sidebar Toggler (Sidebar) -->
		<div class="text-center d-none d-md-inline">
			<button class="rounded-circle border-0" id="sidebarToggle"></button>
		</div>

	</ul>
	<!-- End of Sidebar -->
