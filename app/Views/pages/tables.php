<div class="container">
    <div class="page-inner">
        <div class="page-header">
            <h3 class="fw-bold mb-3">DataTables</h3>
            <ul class="breadcrumbs mb-3">
                <li class="nav-home">
                    <a href="#">
                        <i class="icon-home"></i>
                    </a>
                </li>
                <li class="separator">
                    <i class="icon-arrow-right"></i>
                </li>
                <li class="nav-item">
                    <a href="<?php echo site_url('/') ?>">Dashboard</a>
                </li>
                <li class="separator">
                    <i class="icon-arrow-right"></i>
                </li>
                <li class="nav-item">
                    <a href="<?php echo site_url('/tables') ?>">Datatables</a>
                </li>
            </ul>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <h4 class="card-title">Basic</h4>
                        <div class="float-end">
                            <a href="<?= site_url('/pageInsertUser'); ?>" class="btn btn-success btn-round m-1">
                                <i class="fa-solid fa-plus"></i> เพิ่มข้อมูล
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="basic-datatables" class="display table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th class="text-center">Picture</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Password</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($users as $user): ?>
                                        <tr>
                                        <td><img src="<?php echo base_url($user['user_img']) ?>" alt="Image" width="100" height="100" class="rounded-circle" style="object-fit: cover;"></td>
                                            <td><?php echo $user['name'] ?></td>
                                            <td><?php echo $user['email'] ?></td>
                                            <td><?php echo $user['password'] ?></td>
                                            <td class="text-center">
                                                <a href="<?= site_url('userGetID/') . $user['id']; ?>" class="btn btn-warning edit_sale"><i class="fa-solid fa-pen-to-square"></i></a>
                                                <button class="btn btn-danger delete-user" data-id="<?= $user['id']; ?>"><i class="fa-solid fa-trash"></i></button>
                                            </td>
                                        </tr>
                                    <?php endforeach ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>