<div class="container">
    <div class="page-inner">
        <div class="page-header">
            <h3 class="fw-bold mb-3">UpdateUser</h3>
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
                    <a href="<?= site_url('/tables') ?>">Datatables</a>
                </li>
                <li class="separator">
                    <i class="icon-arrow-right"></i>
                </li>
                <li class="nav-item">
                    <a href="#">UpdateUser</a>
                </li>
            </ul>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Update User</div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                        <form id="add_create" method="post" name="addname" action="<?= site_url('updateU/' . $user_obj['id']) ?>" enctype="multipart/form-data">
                                <div class="d-flex flex-wrap">
                                    <input type="hidden" name="id" value="<?= $user_obj['id'] ?>">
                                    <div class="form-group col-lg-6 mb-2">
                                        <label for="name">Name:</label>
                                        <input type="text" name="name" value="<?= $user_obj['name'] ?>" class="form-control" required>
                                    </div>
                                    <div class="form-group col-lg-6 mb-2">
                                        <label for="email">Email:</label>
                                        <input type="email" name="email" value="<?= $user_obj['email'] ?>" class="form-control" required>
                                    </div>
                                    <div class="form-group col-lg-6 mb-2">
                                        <label for="password">Password:</label>
                                        <input type="password" name="password" value="<?= $user_obj['password'] ?>" class="form-control" required>
                                    </div>
                                </div>
                                <div class="form-group col-lg-4 mb-2">
                                        <label for="user_img">Profile Image:</label>
                                        <input type="file" name="user_img" id="user_img" onchange="previewImage();" class="form-control" accept="image/*">
                                    </div>
                                    <img id="preview" src="<?php echo base_url($user_obj['user_img']) ?>" alt="Image Preview" class="mx-3 rounded shadow" style="width: 300px; margin-top: 10px;">
                                <div class="card-action mt-3">
                                    <button type="submit" class="btn btn-success">Submit</button>
                                    <a href="<?= site_url('/tables'); ?>" class="btn btn-danger">Cancel</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
