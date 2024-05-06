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
                        <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-search fa-fw"></i>
                        </a>
                        <!-- Dropdown - Messages -->
                        <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                            <form class="form-inline mr-auto w-100 navbar-search">
                                <div class="input-group">
                                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
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

                    <!-- Nav Item - plan Information -->
                    <li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#" id="planDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <?php if(auth()->guard()->check()): ?>
                            <!-- Display the plan's name -->
                            <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo e(auth()->user()->name); ?></span>
                            <?php endif; ?>
                            <img class="img-profile rounded-circle" src="img/undraw_profile.svg">
                        </a>
                        <!-- Dropdown - plan Information -->
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="planDropdown">
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-plan fa-sm fa-fw mr-2 text-gray-400"></i>
                                Profile
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
                    <h1 class="h3 mb-0 text-gray-800">Catgories</h1>
                    <button class="btn btn-primary" onclick="window.location.href='<?php echo e(route('admin.add_category')); ?>'">
                <i class="fas fa-plus"></i> 
            </button>

                </div>


                <?php if(session('success')): ?>
                <div class="alert alert-success">
                    <?php echo e(session('success')); ?>

                </div>
                <?php endif; ?>


                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">ID</th>
                                                <th scope="col">Category Name</th>
                                                <th scope="col">Created At</th>
                                                <th scope="col">Updated At</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                            <td class="category-id"><?php echo e($category->id); ?></td>

                                                <td><?php echo e($category->category_name); ?></td>
                                                <td><?php echo e($category->created_at); ?></td>
                                                <td><?php echo e($category->updated_at); ?></td>
                                                <td>
                                                    <button type="button" class="btn btn-danger btn-sm delete-btn">
                                                        <i class="fas fa-trash"></i>
                                                    </button>

                                                    <button type="button" class="btn btn-info btn-sm mr-1"
                                                            onclick="window.location.href='<?php echo e(route('admin.editCategory', $category->id)); ?>'">
                                                            <i class="fas fa-edit"></i> 
                                                        </button>
                                                </td>
                                            </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </tbody>
                                    </table>


                                </div>
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
            var id = row.find('.category-id').text();
            console.log(id);


          

            // Show SweetAlert confirmation dialog as a small card
            Swal.fire({
                title: 'Are you sure?',
                text: 'You want to delete this plan?',
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
                        url: '<?php echo e(route("admin.delete_category", ":id")); ?>'.replace(':id', id),
                        data: {
                            _token: '<?php echo e(csrf_token()); ?>'
                        }, // Add CSRF token for Laravel
                        success: function(response) {
                            // Remove the row from the table if delete is successful
                            row.remove();
                            // Show success message
                            Swal.fire({
                                title: 'Deleted!',
                                text: 'Your plan has been deleted.',
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
<?php echo $__env->make('admin.layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\www\gmg solution\memorial\memorial\resources\views/admin/categories/index.blade.php ENDPATH**/ ?>