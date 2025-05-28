<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid my-2">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Specialties</h1>
                </div>
                <div class="col-sm-6 text-right">
                    <a href="index.php?page=admin_specialties_create" class="btn btn-primary">New Specialty</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <div class="card-tools">
                        <form method="GET" action="">
                            <div class="input-group" style="width: 250px;">
                                <input type="text" name="search" class="form-control float-right" placeholder="Search">
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-default">
                                        <i class="fas fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- Main content -->
                <section class="content">
                    <div class="container-fluid">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Add New Specialty</h3>
                            </div>
                            <!-- /.card-header -->

                            <!-- form start -->
                            <form method="POST" action="index.php?page=admin_specialties_store">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="name">Specialty Name</label>
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter specialty name" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="description">Description (optional)</label>
                                        <textarea class="form-control" id="description" name="description" rows="3" placeholder="Write a short description..."></textarea>
                                    </div>
                                </div>
                                <!-- /.card-body -->

                                <div class="card-footer text-right">
                                    <button type="submit" class="btn btn-primary">Save Specialty</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </section>
</div>