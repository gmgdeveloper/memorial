@include('admin.layouts.header')
<!-- Page Wrapper -->
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
            <h1 class="h3 mb-0 text-gray-800">EditPlan PLan</h1>
           
        </div>


                @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
                @endif


                <div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('admin.update_plan', $plan->id) }}" method="POST">
                    @csrf
                    

                    <div class="form-group">
                        <label for="price">Price:</label>
                        <input type="text" class="form-control" id="price" name="price" placeholder="Enter price" value="{{ $plan->price }}">
                    </div>
                    <div class="form-group">
                        <label for="duration">Duration:</label>
                        <select class="form-control" id="duration" name="duration">
                        <option value="lifetime" {{ $plan->duration === 'lifetime' ? 'selected' : '' }}>Lifetime</option>
                        <option value="yearly" {{ $plan->duration === 'yearly' ? 'selected' : '' }}>Yearly</option>
                            <option value="monthly" {{ $plan->duration === 'monthly' ? 'selected' : '' }}>Monthly</option>
                            <option value="six_months" {{ $plan->duration === 'six_months' ? 'selected' : '' }}>Six Months</option>
                            <option value="three_months" {{ $plan->duration === 'three_months' ? 'selected' : '' }}>Three Months</option>
                            <option value="weekly" {{ $plan->duration === 'weekly' ? 'selected' : '' }}>Weekly</option>
                        </select>
                    </div>

<div class="form-group">
    <label for="end_date">End Date:</label>
    <input type="date" class="form-control" id="end_date" name="end_date" placeholder="Enter end date" value="{{ $plan->end_date ? \Carbon\Carbon::parse($plan->end_date)->format('Y-m-d') : '' }}">
</div>



                    <div class="form-group">
                        <label for="features">Features:</label>
                        <textarea class="form-control" id="features" name="features" rows="3" placeholder="Enter features">{{ $plan->features }}</textarea>
                    </div>

                    <div class="form-group">
                        <label for="description">Description:</label>
                        <textarea class="form-control" id="description" name="description" rows="3" placeholder="Enter description">{{ $plan->description }}</textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Update Plan</button>
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




<!-- End of Page Wrapper -->
@include('admin.layouts.footer')