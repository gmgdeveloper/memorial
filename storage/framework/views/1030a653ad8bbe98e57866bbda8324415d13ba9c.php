<?php echo $__env->make('admin.layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!-- Page Wrapper -->
<div id="wrapper">

    <?php echo $__env->make('admin.layouts.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>



    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Topbar -->
            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                <!-- Sidebar Toggle (Topbar) -->
                <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                    <i class="fa fa-bars"></i>
                </button>

                <!-- Topbar Navbar -->
                <ul class="navbar-nav ml-auto">

                    <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                    <li class="nav-item dropdown no-arrow d-sm-none">
                        <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-search fa-fw"></i>
                        </a>
                        <!-- Dropdown - Messages -->
                        <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                            aria-labelledby="searchDropdown">
                            <form class="form-inline mr-auto w-100 navbar-search">
                                <div class="input-group">
                                    <input type="text" class="form-control bg-light border-0 small"
                                        placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="button">
                                            <i class="fas fa-search fa-sm"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </li>



                    <div class="topbar-divider d-none d-sm-block"></div>

                    <!-- Nav Item - User Information -->
                    <li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <?php if(auth()->guard()->check()): ?>
                            <!-- Display the user's name -->
                            <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo e(auth()->user()->name); ?></span>
                            <?php endif; ?>
                            <img class="img-profile rounded-circle" src="img/undraw_profile.svg">
                        </a>
                        <!-- Dropdown - User Information -->
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                            aria-labelledby="userDropdown">
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                Profile
                            </a>
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                Settings
                            </a>
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                Activity Log
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                Logout
                            </a>
                        </div>
                    </li>

                </ul>

            </nav>
            <!-- End of Topbar -->

            <!-- Begin Page Content -->
            <div class="container-fluid">

                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">Users</h1>

                </div>


                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <!-- admin/edit_user.blade.php -->
                                <form action="<?php echo e(route('admin.update_user', $user->id)); ?>" method="POST">
                                    <?php echo csrf_field(); ?>
                                   
                                    <!-- Use PUT method for updating data -->

                                    <div class="form-group">
                                        <label for="role">Role:</label>
                                        <select class="form-control" id="role" name="role">
                                            <option value="visitor" <?php echo e($user->role === 'visitor' ? 'selected' : ''); ?>>Visitor</option>
                                            <option value="page_administrator" <?php echo e($user->role === 'page_administrator' ? 'selected' : ''); ?>>Page Administrator</option>
                                            <option value="user" <?php echo e($user->role === 'user' ? 'selected' : ''); ?>>User</option>
                                        </select>
                                    </div>


                                    <div class="form-group">    
                                        <label for="name">Name:</label>
                                        <input type="text" class="form-control" id="name" name="name"
                                            value="<?php echo e($user->name); ?>">
                                    </div>

                                    <div class="form-group">
                                        <label for="username">Username:</label>
                                        <input type="text" class="form-control" id="username" name="username"
                                            value="<?php echo e($user->username); ?>">
                                    </div>

                                    <div class="form-group">
                                        <label for="email">Email:</label>
                                        <input type="email" class="form-control" id="email" name="email"
                                            value="<?php echo e($user->email); ?>">
                                    </div>

                                    <div class="form-group">
                                    <label for="status">Status:</label>
                                    <select class="form-control" id="is_active" name="is_active">
                                        <option value="1" <?php echo e($user->is_active == 1 ? 'selected' : ''); ?>>Active</option>
                                        <option value="0" <?php echo e($user->is_active == 0 ? 'selected' : ''); ?>>Blocked</option>
                                    </select>
                                </div>




                                    <div class="form-group">
                                        <label for="no_of_memorial_pages">No of Memorial Pages:</label>
                                        <input type="text" class="form-control" id="no_of_memorial_pages"
                                            name="no_of_memorial_pages" value="<?php echo e($user->no_of_memorial_pages); ?>">
                                    </div>

                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>





            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->

        <!-- Footer -->
        <footer class="sticky-footer bg-white">
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <span>Copyright &copy; Your Website 2021</span>
                </div>
            </div>
        </footer>
        <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

</div>


<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
$(document).ready(function() {
    $('.delete-btn').click(function() {
        // Get the row data
        var row = $(this).closest('tr');
        var id = row.find('td:first').text(); // Assuming the ID is in the first column

        // Show SweetAlert confirmation dialog as a small card
        Swal.fire({
            title: 'Are you sure?',
            text: 'You want to delete this user?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!',
            customClass: {
                container: 'my-swal-container',
                popup: 'my-swal-popup',
                title: 'my-swal-title',
                content: 'my-swal-content',
                confirmButton: 'my-swal-confirm-button'
            }
        }).then((result) => {
            if (result.isConfirmed) {
                // Send AJAX request to delete the item
                $.ajax({
                    type: 'POST',
                    url: '<?php echo e(route("admin.delete_user", ["id" => ":id"])); ?>'.replace(
                        ':id', id),
                    data: {
                        _token: '<?php echo e(csrf_token()); ?>'
                    }, // Add CSRF token for Laravel
                    success: function(response) {
                        // Remove the row from the table if delete is successful
                        row.remove();
                        // Show success message
                        Swal.fire({
                            title: 'Deleted!',
                            text: 'Your User has been deleted.',
                            icon: 'success',
                            customClass: {
                                container: 'my-swal-container',
                                popup: 'my-swal-popup',
                                title: 'my-swal-title',
                                content: 'my-swal-content',
                                confirmButton: 'my-swal-confirm-button'
                            }
                        });
                    },
                    error: function(xhr, status, error) {
                        // Show error message
                        Swal.fire({
                            title: 'Error!',
                            text: 'Something went wrong.',
                            icon: 'error',
                            customClass: {
                                container: 'my-swal-container',
                                popup: 'my-swal-popup',
                                title: 'my-swal-title',
                                content: 'my-swal-content',
                                confirmButton: 'my-swal-confirm-button'
                            }
                        });
                    }
                });
            }
        });
    });
});
</script>



<!-- End of Page Wrapper -->
<?php echo $__env->make('admin.layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\www\gmg solution\Memorial\memorial\resources\views/admin/edit_user.blade.php ENDPATH**/ ?>