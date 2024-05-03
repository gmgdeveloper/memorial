@include('admin.layouts.header')
<!-- Page Wrapper -->
<style>
.top_rw {
    background-color: #f4f4f4;
}

.td_w {}

button {
    padding: 5px 10px;
    font-size: 14px;
}

.invoice-box {
    max-width: 890px;
    margin: auto;
    padding: 10px;
    border: 1px solid #eee;
    box-shadow: 0 0 10px rgba(0, 0, 0, .15);
    font-size: 14px;
    line-height: 24px;
    font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
    color: #555;
}

.invoice-box table {
    width: 100%;
    line-height: inherit;
    text-align: left;
    border-bottom: solid 1px #ccc;
}

.invoice-box table td {
    padding: 5px;
    vertical-align: middle;
}

.invoice-box table tr td:nth-child(2) {
    text-align: right;
}

.invoice-box table tr.top table td {
    padding-bottom: 20px;
}

.invoice-box table tr.top table td.title {
    font-size: 45px;
    line-height: 45px;
    color: #333;
}

.invoice-box table tr.information table td {
    padding-bottom: 40px;
}

.invoice-box table tr.heading td {
    background: #eee;
    border-bottom: 1px solid #ddd;
    font-weight: bold;
    font-size: 12px;
}

.invoice-box table tr.details td {
    padding-bottom: 20px;
}

.invoice-box table tr.item td {
    border-bottom: 1px solid #eee;
}

.invoice-box table tr.item.last td {
    border-bottom: none;
}

.invoice-box table tr.total td:nth-child(2) {
    border-top: 2px solid #eee;
    font-weight: bold;
}

@media only screen and (max-width: 600px) {
    .invoice-box table tr.top table td {
        width: 100%;
        display: block;
        text-align: center;
    }

    .invoice-box table tr.information table td {
        width: 100%;
        display: block;
        text-align: center;
    }
}

/** RTL **/
.rtl {
    direction: rtl;
    font-family: Tahoma, 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
}

.rtl table {
    text-align: right;
}

.rtl table tr td:nth-child(2) {
    text-align: left;
}
</style>
<div id="wrapper">



    @include('admin.layouts.sidebar')





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

                    <!-- Nav Item - plan Information -->
                    <li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#" id="planDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            @auth
                            <!-- Display the plan's name -->
                            <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{ auth()->user()->name }}</span>
                            @endauth
                            <img class="img-profile rounded-circle" src="img/undraw_profile.svg">
                        </a>
                        <!-- Dropdown - plan Information -->
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                            aria-labelledby="planDropdown">
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-plan fa-sm fa-fw mr-2 text-gray-400"></i>
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
                    <h1 class="h3 mb-0 text-gray-800">History</h1>

                </div>


                @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
                @endif


                <div class="row">
                    @foreach($plans as $plan)
                    <div class="col-12">
                        <div class="invoice-box">
                        <table cellpadding="0" cellspacing="0">
                            <tr class="top_rw">
                                <td colspan="2">
                                    <h2 style="margin-bottom: 0px;">{{ strtoupper($plan->name) }} </h2>
                                </td>
                                <td style="width:30%; margin-right: 10px;">
                                    {{ strtoupper($plan->id) }}
                                    <?php 
                             
                               $plandata = DB::table('plans')->where('id',$plan->plan_id)->get();
                               
                              
                    ?>
                                </td>
                            </tr>
                            <tr class="top">
                                <td colspan="3">
                                    <table>
                                        <tr>
                                            <td>
                                                <b> FIRST NAME : {{ strtoupper($plan->first_name) }} </b> <br>
                                                <b> LAST NAME : {{ strtoupper($plan->last_name) }} </b> <br>
                                                <b> MIDDLE NAME : {{ strtoupper($plan->middle_name) }} </b> <br>
                                                <b> DATE OF DEATH : {{ strtoupper($plan->date_of_death) }} </b> <br>
                                                <b> DATE OF BIRTH : {{ strtoupper($plan->date_of_birth) }} </b> <br>
                                                <b> MEMORIAL WEB ADDRESS : {{ strtoupper($plan->memorial_web_address) }}
                                                </b> <br>
                                                <b> PAGE TYPE : {{ strtoupper($plan->page_type) }} </b> <br>
                                                <b> TOTAL AMOUNT : {{ strtoupper($plan->total_amount) }} </b> <br>
                                                <b> EMAIL : {{ strtoupper($plan->email) }} </b> <br>
                                                <h1>PLANS</h1>
                                                @foreach($plandata as $data)
                                                <b> DURATION : {{ strtoupper( $data->duration) }} </b> <br>
                                                <b> FEATURES : {{ strtoupper($data->features) }} </b> <br>
                                               
                                                <b> DESCRIPTION : {{ strtoupper( $data->description) }} </b> <br>
                                                <br> <b> END DATE : {{ strtoupper( $data->end_date) }} </b> <br>
                                            
                                            
                                                @endforeach
                                            
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </div>
                    </div>
                    
                    @endforeach
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
        var id = row.find('.page-id').text();

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
                    url: '{{ route("admin.delete_page", ":id") }}'.replace(':id', id),
                    data: {
                        _token: '{{ csrf_token() }}'
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
@include('admin.layouts.footer')