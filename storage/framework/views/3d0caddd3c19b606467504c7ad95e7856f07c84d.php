<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
    
    <div class="sidebar-brand-text mx-3">
        <?php if(auth()->guard()->check()): ?>
        <span class="text-white"><?php echo e(auth()->user()->name); ?></span>
        <?php endif; ?>
    </div>
</a>


    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="#">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->



    <!-- Nav Item - Charts -->
    <?php if(auth()->guard()->check()): ?>
    <?php if(auth()->user()->role === 'admin'): ?>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo e(route('admin.getallusers')); ?>">
                <i class="fas fa-fw fa-chart-area"></i>
                <span>User</span>
            </a>
        </li>
    <?php endif; ?>
<?php endif; ?>




<?php if(auth()->guard()->check()): ?>
    <?php if(auth()->user()->role === 'admin'): ?>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo e(route('admin.categories')); ?>">
                <i class="fas fa-fw fa-chart-area"></i>
                <span>Category</span>
            </a>
        </li>
    <?php endif; ?>
<?php endif; ?>

<?php if(auth()->guard()->check()): ?>
    <?php if(auth()->user()->role === 'admin'): ?>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo e(route('admin.getpages_created')); ?>">
                <i class="fas fa-fw fa-chart-area"></i>
                <span>Pages</span>
            </a>
        </li>
    <?php endif; ?>
<?php endif; ?>

<?php if(auth()->guard()->check()): ?>
    <?php if(auth()->user()->role === 'admin'): ?>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo e(route('admin.plans')); ?>">
                <i class="fas fa-fw fa-chart-area"></i>
                <span>Plans</span>
            </a>
        </li>
    <?php endif; ?>
<?php endif; ?>


    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>


</ul>
<!-- End of Sidebar --><?php /**PATH D:\laragon\www\gmg solution\memorial\memorial\resources\views/admin/layouts/sidebar.blade.php ENDPATH**/ ?>