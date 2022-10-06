<div class="card m-5">
    <div class="card-header">
        <div class="row">
            <div class="col-lg-10 col-sm-12">
                <h3>Manage Users</h3>
            </div>
            <div class="col-lg-2 col-sm-12 text-center">
                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#btn_add_users"><i class="fa fa-user-plus"></i> Add User</button>
            </div>
        </div>
    </div>
    <!-- Modal Add -->
    <div class="modal fade fw-bold" style="margin-top: 80px;" id="btn_add_users" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen modal-dialog-scrollable">
            <div class="modal-content">
                <form method="POST" class="modal-body card" enctype="multipart/form-data">
                    <div class="card-header d-flex justify-content-between">
                        <h3>FORM ADD USER</h3>
                        <div>
                            <button class="btn btn-danger" type="button" data-bs-dismiss="modal" aria-label="Close"><i class="fa-solid fa-caret-left"></i> Back</button>
                            <button class="btn btn-primary" type="submit"><i class="fa fa-user-plus"></i> Save</button>
                        </div>
                    </div>
                    <div class="card-body border">
                        <div class="row mt-3">
                            <div class="col-2 d-flex align-items-center">
                                <label for="role">Role <span class="text-danger">*</span></label>
                            </div>
                            <div class="col-10">
                                <select required class="form-control" name="role" id="role">
                                    <option value="user">user</option>
                                    <option value="admin">admin</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-2 d-flex align-items-center">
                                <label for="id">ID <span class="text-danger">*</span></label>
                            </div>
                            <div class="col-10">
                                <input required placeholder="Enter Here" type="text" name="id" id="id" class="form-control">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-2 d-flex align-items-center">
                                <label for="password">Password <span class="text-danger">*</span></label>
                            </div>
                            <div class="col-10">
                                <input required placeholder="Enter Here" type="password" name="password" id="password" class="form-control">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-2 d-flex align-items-center">
                                <label for="name">Name <span class="text-danger">*</span></label>
                            </div>
                            <div class="col-10">
                                <input required placeholder="Enter Here" type="text" name="name" id="name" class="form-control">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-2 d-flex align-items-center">
                                <label for="departement">Departement <span class="text-danger">*</span></label>
                            </div>
                            <div class="col-10">
                                <input required placeholder="Enter Here" type="text" name="departement" id="departement" class="form-control">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-2 d-flex align-items-center">
                                <label for="picture">Profile Picture <span class="text-danger">*</span></label>
                            </div>
                            <div class="col-10">
                                <input required placeholder="Enter Here" type="file" name="picture" id="picture" class="form-control">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-2 d-flex align-items-center">
                                <label for="area">Area <span class="text-danger">*</span></label>
                            </div>
                            <div class="col-10">
                                <input class="form-check-input" type="checkbox" name="A" id="A">
                                <label class="form-check-label" for="A">A. Daerah Kedatangan (Arrival) Penumpang</label><br>
                                <input class="form-check-input" type="checkbox" name="B" id="B">
                                <label class="form-check-label" for="B">B. Ruang Tunggu Keberangkatan</label><br>
                                <input class="form-check-input" type="checkbox" name="C" id="C">
                                <label class="form-check-label" for="C">C. Ruang CHECK-IN</label><br>
                                <input class="form-check-input" type="checkbox" name="F" id="F">
                                <label class="form-check-label" for="F">F. Bagian Luar Gudang Karga Atau Halaman Kargo</label><br>
                                <input class="form-check-input" type="checkbox" name="G" id="G">
                                <label class="form-check-label" for="G">G. Bagian Dalam Gudang Kargo</label><br>
                                <input class="form-check-input" type="checkbox" name="L" id="L">
                                <label class="form-check-label" for="L">L. Gedung Listrik</label><br>
                                <input class="form-check-input" type="checkbox" name="M" id="M">
                                <label class="form-check-label" for="M">M. Daerah Fasilitas Metereologi</label><br>
                                <input class="form-check-input" type="checkbox" name="N" id="N">
                                <label class="form-check-label" for="N">N. Gedung Peralatan Navigasi Dan Telekomunikasi</label><br>
                                <input class="form-check-input" type="checkbox" name="O" id="O">
                                <label class="form-check-label" for="O">O. Daerah Fasilitas Suplai Bahan Bakar</label><br>
                                <input class="form-check-input" type="checkbox" name="P" id="P">
                                <label class="form-check-label" for="P">P. Platform / Apron Area</label><br>
                                <input class="form-check-input" type="checkbox" name="R" id="R">
                                <label class="form-check-label" for="R">R. Gedung Radar</label><br>
                                <input class="form-check-input" type="checkbox" name="T" id="T">
                                <label class="form-check-label" for="T">T. Tower</label><br>
                                <input class="form-check-input" type="checkbox" name="U" id="U">
                                <label class="form-check-label" for="U">U. Baggage Make-Up Area Sisi Udara Kecuali Apron</label><br>
                                <input class="form-check-input" type="checkbox" name="V" id="V">
                                <label class="form-check-label" for="V">V. Seluruh Daerah Fasilitas Vital Bandar Udara</label>
                            </div>
                        </div>
                    </div>
                </form>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead class="table-primary text-center">
                    <tr>
                        <th scope="col">Role</th>
                        <th scope="col">Picture</th>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Departement</th>
                        <th scope="col">Area</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach (Database::FindAll('users') as $user) : ?>
                        <tr class="text-center">
                            <td><?= $user['role']; ?></td>
                            <td><a href="<?= BASEURL; ?>/files/profile/<?= $user['picture']; ?>" target="_blank"><img width="30px" src="<?= BASEURL; ?>/files/profile/<?= $user['picture']; ?>" alt=""></a></td>
                            <td><?= $user['id']; ?></td>
                            <td><?= $user['name']; ?></td>
                            <td><?= $user['departement']; ?></td>
                            <td>
                                <?php foreach (Database::find('area', 'id', $user['id']) as $key => $val) : ?>
                                    <?php if ($key == 'id' || $val == 'off') continue; ?>
                                    <?= $key; ?>
                                <?php endforeach; ?>
                            </td>
                            <td>
                                <a href="<?= BASEURL; ?>/Users/update/<?= $user['id']; ?>" class="my-1 btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
                                <a onclick="return confirm('Hapus?')" href="<?= BASEURL; ?>/Users/delete/<?= $user['id']; ?>" class="my-1 btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>